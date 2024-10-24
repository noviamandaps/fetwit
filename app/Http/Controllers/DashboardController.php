<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class DashboardController extends Controller
{

    protected $client;
    public function __construct()
    {
        $this->client = new Client();
    }

    public function index()
    {
        $data = $this->submit();
        return view('dashboard', ['data' => $data]);
    }

    public function submit()
    {
        try {
            $response = $this->client->get("http://127.0.0.1:8000/api/article/all", [
                'headers' => [
                    'Accept' => 'application/json',
                    'Content-Type' => 'application/json'
                ]
            ]);

            $jsonResponse = json_decode($response->getBody());
            if ($jsonResponse->status) {
                return $jsonResponse->data;
            } else {
                return null;
            }
        } catch (RequestException $th) {
            dd($th);
            return null;
        }
    }
}

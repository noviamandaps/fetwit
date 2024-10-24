<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class DashboardController extends Controller
{
    public function index()
    {
        // $client = new Client();
        // $response = $client->get("", [
        //     'headers' => [
        //         'authorization' => 'Bearer ' . config('access_token'),
        //         'accept' => 'application/json',
        //     ]
        // ]);
        // return view('dashboard', [
        //     'article' => json_decode($response->getBody()),
        // ]);
        return view('dashboard');
    }
}

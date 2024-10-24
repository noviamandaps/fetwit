<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class AuthController extends Controller
{
    protected $client;
    public function __construct()
    {
        $this->client = new Client();
    }

    public function index()
    {
        return view('login');
    }

    public function submit(Request $req)
    {
        try {
            $response = $this->client->post("http://127.0.0.1:8000/api/auth/login", [
                'headers' => [
                    'Accept' => 'application/json',
                    'Content-Type' => 'application/json'
                ],
                'body' => json_encode([
                    "email" => $req->email,
                    "password" => $req->password
                ])
            ]);

            $jsonResponse = json_decode($response->getBody());
            // dd($jsonResponse);
            $res = [];
            if ($jsonResponse->status) {
                $req->session()->put('LoginSession', $jsonResponse->data->token);
                $req->session()->put('UserId', $jsonResponse->data->user->id);

                $res = [
                    'type' => 'success',
                    'message' => 'Berhasil login!',
                ];
                return redirect(route('dashboard'))->with($res);
            } else {
                $res = [
                    'type' => 'error',
                    'message' => 'Gagal login, username atau password salah!',
                ];
                return redirect(route('login'))->with($res);
            }
        } catch (RequestException $th) {
            $res = [
                'type' => 'error',
                'message' => json_decode($th->getResponse()->getBody()->getContents())->message ?? 'Terjadi kesalahan!',
            ];
            return redirect()->route('login')->with($res);
        }
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect()->route('login');
    }
}

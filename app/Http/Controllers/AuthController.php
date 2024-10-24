<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use GuzzleHttp\Client;

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

    public function submit(Request $request)
    {
        $client = new Client();
        try {
            $loginRequest = $this->client->post('', [
                'form_params' => [
                    "email" => $request->email,
                    "password" => $request->password,
                ]
            ]);

            $response = json_decode($loginRequest->getBody());
            $data = $response->data;
            if ($response->status == true) {
                $request->session()->put('LoginSession', $data->token);
                return redirect()->intended('home')->with(['message' => 'Login successful.']);
            } else {
                return redirect()->back()->with(['error' => 'Invalid credentials. Please try again.']);
            }
        } catch (\Throwable $th) {
            return redirect()->back()->with(['error' => 'An error occurred. Please try again.']);
        }
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect()->route('login');
    }
}

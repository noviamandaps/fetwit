<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ArticleController extends Controller
{
    protected $client;
    public function __construct()
    {
        $this->client = new Client();
    }
    public function index()
    {

        return view('article');
    }

    public function submitArticle(Request $req)
    {
        $req->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $data = [
            'title' => $req->title,
            'content' => $req->content,
        ];

        return redirect()->route('article')->with($data);
    }

    public function getArticle($article_id)
    {
        try {
            // dd($article_id);
            $token = Session::get('LoginSession');
            $response = $this->client->get("http://127.0.0.1:8000/api/article?id=$article_id", [
                'headers' => [
                    'Accept' => 'application/json',
                    'Authorization' => 'Bearer ' . $token
                ]
            ]);

            $jsonResponse = json_decode($response->getBody());
            if ($jsonResponse->status) {
                return view('article', ['data' => $jsonResponse->data]);
            } else {
                return null;
            }
        } catch (RequestException $th) {
            dd($th);
            return null;
        }
    }

    public function createComment(Request $req)
    {
        try {
            $token = Session::get('LoginSession');
            $UserId = Session::get('UserId');

            // dd(
            //     [
            //         'user_id' => intval($UserId),
            //         'article_id' => $req->article_id,
            //         'body' => $req->body,
            //     ]
            // );
            $response = $this->client->post("http://127.0.0.1:8000/api/comment", [
                'headers' => [
                    'Accept' => 'application/json',
                    'Content-Type' => 'application/json',
                    'Authorization' => 'Bearer ' . $token
                ],
                'body' => json_encode([
                    'user_id' => intval($UserId),
                    'article_id' => intval($req->article_id),
                    'body' => $req->body,
                ])
            ]);

            $jsonResponse = json_decode($response->getBody());
            if ($jsonResponse->status) {
                return $this->getArticle($req->article_id);
            } else {
                return null;
            }
        } catch (RequestException $th) {
            dd($th);
            return null;
        }

    }
}

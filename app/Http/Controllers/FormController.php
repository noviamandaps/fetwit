<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        return view('formarticle');
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
}

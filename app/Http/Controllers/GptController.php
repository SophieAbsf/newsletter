<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GptController extends Controller
{
    public function gpt(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);

        dd("route");

        $answer = chatgpt($request->title);
        $mails = Repertoire::get();

        return view('gpt', [
            'title' => $request->title,
            'answer' => $answer,
            'mails' => $mails
        ]);
    }
}

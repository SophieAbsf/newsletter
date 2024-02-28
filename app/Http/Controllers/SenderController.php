<?php

namespace App\Http\Controllers;

use App\Models\Repertoire;
use App\Mail\News;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class SenderController extends Controller
{
    public function send(Request $request) {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'valto' => 'required'
        ]);

        $sub = $request->title;
        $cont = $request->content;

        $users = Repertoire::get();

        if($request->valto == "last")
        {
            foreach ($users as $value) {
                Mail::to($value->email)->send(new News($sub,$cont));
            }
        }
        else
        {
            Mail::to($request->valto)->send(new News($sub,$cont));
        }
        

        return redirect()->back();
    }
}

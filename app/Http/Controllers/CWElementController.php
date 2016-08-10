<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Element;
use App\Http\Requests;
use DB;

class CWElementController extends Controller
{   
    public function create(Request $request)
    {
       $this->validate($request, [
         'titre'  => 'required',
         'description' => 'required',
         'lieu' => 'required',
         'photo' => 'required',
       ]);
        
       $post = new Element;
       $post->titre = $request->input('titre');
       $post->description = $request->input('description');
       $post->lieu = $request->input('lieu');
       $post->photo = $request->input('photo');
       
       $post->save();

       return response()->success(compact('element'));
    }

    public function get()
    {
        $elements = Element::get();

        return response()
        ->success(compact('elements'));
    }
}

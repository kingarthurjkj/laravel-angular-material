<?php

namespace App\Http\Controllers;

use App\Modal\Evaluate;
use App\Http\Requests;
use Illuminate\Http\Request;

class CWEvaluateController extends Controller
{
    public function create(Request $request)
    {

       $evaluate = new Evaluate;
        $evaluate->group_id =1;
        $evaluate->give_user_id = $request->input('giver');
        $evaluate->take_user_id = $request->input('taker');
        $evaluate->day = $request->input('day');
        $evaluate->activity_id = 1;
        $evaluate->question_id = $request->input('id');
        $evaluate->measure = 3;
        $evaluate->answer = $request->input('answer');
        $evaluate->save();

       return response()->success(compact('evaluate'));
     }
    public function get()
    {
        $evaluates = Evaluate::get();

        return response()
            ->success(compact('evaluates'));
    }
}

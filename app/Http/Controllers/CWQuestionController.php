<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modal\Question;
use App\Modal\Activity;
use App\Http\Requests;
use DB;

class CWQuestionController extends Controller
{   
    
    public function getId($id)
    {
        $questions = Question::where('id','>=',$id)->first();

        return response()
        ->success(compact('questions'));
    }
    public function create(Request $request)
    {
        $this->validate($request, [
            'activity'  => 'required',
            'problem'  => 'required',
            'option' => 'required',
        ]);
//        $id = Activity::where('','')
//            ->get();
        $question = new Question;
        $question->activity_id = $request->input('activity');
        $question->problem = $request->input('problem');
        $question->option = $request->input('option');
        $question->save();

        return response()->success(compact('question'));
    }
    public function get()
    {
        $questions = Activity::leftjoin('questions','activities.id','=','questions.activity_id')
                  ->get();

        return response()
            ->success(compact('questions'));
    }
    public function delete(Request $request)
    {
        $id = $request->input('id');
        return Question::destroy($id);
    }
}

<?php

namespace App\Http\Controllers;

use App\Modal\Activity;
use App\Http\Requests;
use Illuminate\Http\Request;

class CWActivitiesController extends Controller
{
    public function create(Request $request)
    {
       $this->validate($request, [
         'name'  => 'required',
         'description'  => 'required',
         'options' => 'required',
         ]);
       $activity = new Activity;
        $activity->name = $request->input('name');
        $activity->description = $request->input('description');
        $activity->options = $request->input('options');
        $activity->save();

       return response()->success(compact('activity'));
     }
    public function get()
    {
        $activities = Activity::get();

        return response()
            ->success(compact('activities'));
    }
    public function delete(Request $request)
    {
        $this->validate($request, [
            'id'  => 'required'
        ]);
        $id = $request->input('id');
        return Activity::destroy($id);
    }
}

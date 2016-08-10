<?php

namespace App\Http\Controllers;

use App\Modal\Group;
use App\Http\Requests;
use Illuminate\Http\Request;

class CWGroupsController extends Controller
{
    public function create(Request $request)
    {
       $this->validate($request, [
         'name'  => 'required',
         'option' => 'required',
         ]);

       $group = new Group;
        $group->name = $request->input('name');
        $group->option = $request->input('option');
        $group->save();

       return response()->success(compact('group'));
     }
    public function get()
    {
        $groups = Group::get();

        return response()
            ->success(compact('groups'));
    }
    public function delete(Request $request)
    {
        $this->validate($request, [
            'id'  => 'required'
        ]);
        $id = $request->input('id');
        return Group::destroy($id);
    }
}

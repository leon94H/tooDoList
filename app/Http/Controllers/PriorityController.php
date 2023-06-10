<?php

namespace App\Http\Controllers;

use App\Models\Priority;
use Illuminate\Http\Request;

class PriorityController extends Controller

{

    public function index()
    {
        $priorities = Priority::all();

        return view('priorities.index', compact('priorities'));
    }

   
    public function create()
    {
        return view('priorities.create');
    }

   
    public function store(Request $request)

    {
        $request->validate([

            'priority'=>'required',
            
        ]);

        Priority::create($request->all());

        return redirect('/priorities');
    }


    public function updatePriority(Request $request, TodoList $todolist){


    $data = $request->validate([
        'priority' => 'required|in:low,normal,high',
    ]);

    $todolist->update(['priority' => $data['priority']]);

    return back();
}
  



}

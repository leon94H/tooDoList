<?php

namespace App\Http\Controllers;

use App\Models\TodoList;
use Illuminate\Http\Request;
use App\Models\Lable;

class TodoListController extends Controller
{
 
    public function index()
    {
        $todolists = Todolist::all();

        return view('home', compact('todolists'));
    }

  
    public function store(Request $request)
    {
        $data = $request->validate([

            'name'=> 'required',
            

            
        ]);


        // return view('nome_vista')->with('todolists', $todolists)->withInput();


        
        Todolist::create($data);
        return back();

    }

   

    public function destroy(Todolist $todolist)
    {
        $todolist->delete();
        return back();
    }
}

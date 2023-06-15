<?php

namespace App\Http\Controllers;

use App\Models\Lable;
use App\Models\Priority;
use App\Models\TodoList;
use Illuminate\Http\Request;

class TodoListController extends Controller
{
 
    public function index(){


        $todolists = Todolist::all();

        return view('home', compact('todolists'));

    }

  



    public function store(Request $request){


        $data = $request->validate([

            'name'=> 'required',
            'email'=> 'reuired',
            'password'=> 'password_confirmation'
            

            
        ]);


        // return view('nome_vista')->with('todolists', $todolists)->withInput();


        
        Todolist::create($data);
        return back();

    }

   

    public function destroy(Todolist $todolist){


        $todolist->delete();
        return back();
        
    }



   

  
}


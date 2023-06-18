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


        $todolist = $request->validate([

            'name'=> 'required',
            'email'=> 'reuired',
            'password'=> 'password_confirmation'
            

            
        ]);


    


        
        Todolist::create($todolist);
        return back();

    }

   

    public function destroy(Todolist $todolist){


        $todolist->delete();
        return back();
        
    }



   

  
}


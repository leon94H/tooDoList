<?php

namespace App\Http\Controllers;

use App\Models\rc;
use Illuminate\Http\Request;

class LabelConstroller extends Controller
{
   
    public function index()
    {
        $labels = Label::all();
        return view('lables.index', compact('lables'));
    }

   
    public function create()
    {
        return view('labels.create');
    }

   
    public function store(Request $request)
    {
        $request->validate([
           
            'color' => 'required',
        ]);

        Label::create($request->all());

        return redirect('/labels');
    }



    public function updateLabel(Request $request, TodoList $todolist){


        $data = $request->validate([
            'label' => 'required|in:red,blue,green,yellow',
        ]);
        
        $todolist->update(['label' => $data['label']]);
        
        return back();
        }
  
}




// public function index()
// {
//     $priorities = Priority::all();

//     return view('priorities.index', compact('priorities'));
// }


// public function create()
// {
//     return view('priorities.create');
// }


// public function store(Request $request)

// {
//     $request->validate([

//         'priority'=>'required',
        
//     ]);

//     Priority::create($request->all());

//     return redirect('/priorities');
// }



<?php

namespace App\Http\Controllers;

use App\Models\Priority;
use Illuminate\Http\Request;

class PriorityController extends Controller

{

    public function index()
    {
        $priorities = Priority::all();

        return view('home', compact('priorities'));
    }

   
  

   
    public function store(Request $request){







          $priority = Auth::user()->priorities()->save([

          'low'=>$request->low,
          'normal'=>$request->normal,
          'high'=>$request->hig,
          
          
          ]);


          return redirect()->back();


        // $request->validate([

        //     'priority'=>'required',
            
        // ]);

        // Priority::create($request->all());

        // return redirect('/priorities');
    }



}

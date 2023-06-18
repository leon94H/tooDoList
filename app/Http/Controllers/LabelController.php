<?php

namespace App\Http\Controllers;

use App\Models\Label;
use Illuminate\Http\Request;

class LabelConstroller extends Controller
{
   
    public function index()
    {
        $labels = Label::all();
        return view('home', compact('lables'));
    }

   
  

   
    public function store(Request $request)
    {
        $request->validate([
           
            'red' => 'required',
            'blue' => 'required',
            'green' => 'required',
            'yellow' => 'required',
        ]);

       

        return redirect()->back();
    }



}







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
            'name' => 'required',
            'color' => 'required',
        ]);

        Label::create($request->all());

        return redirect('/labels');
    }

  
}

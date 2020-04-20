<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function index()
    {
        $id = auth()->user()->getAuthIdentifier();
        return view('request.index', compact('id'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required',
            'blood_type' => 'required',
            'quantity' => ['required', 'numeric']
        ]);
        \App\Requestt::create($request->all());

        return redirect('/history');
    }
}

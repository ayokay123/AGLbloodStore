<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonorController extends Controller
{
    public function index()
    {
        $email = auth()->user()->email;
        return view("donor.index")->with('email', $email);
    }

    public function history()
    {
        return view('donor.history');
    }
}

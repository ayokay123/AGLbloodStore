<?php

namespace App\Http\Controllers;

use App\Don;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DonorController extends Controller
{
    public function index()
    {
        $email = auth()->user()->email;
        return view("donor.index")->with('email', $email);
    }

    public function history()
    {
        $email = auth()->user()->email;
        $histo = Don::where('email', $email)->get();
        return view('donor.history')->with('history', $histo);
    }
}

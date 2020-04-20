<?php

namespace App\Http\Controllers;

use App\Don;
use App\Requestt;
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
        $id = auth()->user()->getAuthIdentifier();
        $histo = Requestt::where('user_id', $id)->get();
        return view('donor.history', compact('histo'));
    }
}

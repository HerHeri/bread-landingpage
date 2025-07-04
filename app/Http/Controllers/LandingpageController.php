<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LandingpageController extends Controller
{
    function index(){
        $produks    = DB::table('produks')->get();
        $lp         = DB::table('landingpages')->first();
        // dd($lp);
        return view('landingpage', compact('produks', 'lp'));
    }
}

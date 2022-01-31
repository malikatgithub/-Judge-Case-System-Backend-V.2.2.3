<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cases as CaseInfo;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $cases = CaseInfo::all();
        $civil = CaseInfo::where('case_type', 'civil');
        $crime = CaseInfo::where('case_type', 'criminal');
        $reject = CaseInfo::where('status', '0');
        $accept = CaseInfo::where('status', '1');

        $civil_accept = CaseInfo::where('case_type', 'civil')
        ->whereNull('j_comment')
        ->where('status', '1')
        ->get();
  

        $crime_accept = CaseInfo::where('case_type', 'crime')
        ->whereNull('j_comment')
        ->where('status', '1')
        ->get();
  

        return view('home')
        ->with('crime', $crime)
        ->with('civil', $civil)
        ->with('cases', $cases)
        ->with('reject', $reject)
        ->with('accept', $accept)
        ->with('civil_accept', $civil_accept)
        ->with('crime_accept', $crime_accept);

        

        

    


    }
}



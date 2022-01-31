<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cases as CaseInfo;

class ReportsController extends Controller
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

        $accept = CaseInfo::where('status', '1');
        $rejected = CaseInfo::where('status', '0');
        $approved = CaseInfo::whereNotNull('j_comment')->get();
     




        return view('adminreports')
        ->with('accept', $accept)
        ->with('approved', $approved)
        ->with('rejected', $rejected)
        ;

    }


    public function accepted(Request $request){

        $accept = CaseInfo::all()->where('status', '1');

        if ($request->operation == 'show'){
            return view('accepted_reports')
        ->with('accept', $accept)->with('operation', 'show');
        }

        else{
            return view('accepted_reports')
            ->with('accept', $accept)->with('operation', 'print');
        }
        

    }



    public function rejected(Request $request){

        $rejected = CaseInfo::all()->where('status', '0');

        if ($request->operation == 'show'){
            return view('rejected_reports')
        ->with('rejected', $rejected)->with('operation', 'show');
        }

        else{
            return view('rejected_reports')
            ->with('rejected', $rejected)->with('operation', 'print');
        }
        

    }




    
    public function judge(Request $request){

        $judge = CaseInfo::whereNotNull('j_comment')->get();

        if ($request->operation == 'show'){
            return view('judge_reports')
        ->with('judge', $judge)->with('operation', 'show');
        }

        else{
            return view('judge_reports')
            ->with('judge', $judge)->with('operation', 'print');
        }
        

    }

}



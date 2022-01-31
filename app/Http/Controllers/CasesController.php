<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cases as CaseInfo;
use DB;
use App\Lawyers;


class CasesController extends Controller
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
    
        $cases = CaseInfo::whereNull('status')->get();
        

        $reject = CaseInfo::where('status', '0');
        $accept = CaseInfo::where('status', '1');

        return view('cases')->with('cases', $cases)
        ->with('reject', $reject)
        ->with('accept', $accept);


        

    }



    public function cases_search(Request $request)
    {
    
        // CaseInfo::whereNull('status')->get();


        $start_date = $request->start_date;
        $end_date = $request->end_date;

        $cases = DB::select(" SELECT * FROM cases WHERE `created_at` between '$start_date' and '$end_date' AND `status` IS NULL;");



        return view('cases_search')->with('cases', $cases);


        

    }





    public function update1(Request $request, $id)
    {

        try{
            $cases = CaseInfo::find($id);
            $cases->status = 1;
            $cases->save();
            return redirect('cases')->with('success', 'Cases has been accepted');

        }

        catch (\Illuminate\Database\QueryException $exception) {
            return back()->with('error', 'Error');
        }

    }



    public function update2(Request $request, $id)
    {

        try{
            $cases = CaseInfo::find($id);
            $cases->status = 0;
            $cases->save();
            return redirect('cases')->with('success', 'Cases has been rejected');


        }

        catch (\Illuminate\Database\QueryException $exception) {
            return back()->with('error', 'Error');
        }

    }



    public function accepted()
    {
    

        $cases = CaseInfo::where('status', '1')->get();
        $accept = CaseInfo::where('status', '1')->get();

        return view('accepted')->with('cases', $cases)
        ->with('accept', $accept);
        

    }


    public function rejected()
    {
    

        $cases = CaseInfo::where('status', '0')->get();
        $reject = CaseInfo::where('status', '0')->get();

        return view('rejected')->with('cases', $cases)
        ->with('reject', $reject);
        

    }

    
    public function acceptedrollback(Request $request, $id)
    {

        try{
            $cases = CaseInfo::find($id);
            $cases->status = 0;
            $cases->save();
            return redirect('accepted')->with('delete', 'Cases has been rejected');


        }

        catch (\Illuminate\Database\QueryException $exception) {
            return back()->with('error', 'Error');
        }

    }
    public function rejectedrollback(Request $request, $id)
    {

        try{
            $cases = CaseInfo::find($id);
            $cases->status = 1;
            $cases->save();
            return redirect('rejected')->with('delete', 'Cases has been Accepted');


        }

        catch (\Illuminate\Database\QueryException $exception) {
            return back()->with('error', 'Error');
        }

    }


    public function judge()
    {
    

        $approved = CaseInfo::whereNotNull('j_comment')->whereNull('notified')->get();
        return view('judge')->with('approved', $approved);
        

    }


    
    public function store(Request $request){
        

        try {
           

            $request->validate([
            'phone' => 'required|digits:10',
            'id_num' => 'required|digits:10',
            
            ]);
            CaseInfo::create($request->all());
            $info = CaseInfo::latest()->first();
            return view('message')->with('info', $info);

            echo "ok";

        } catch (\Throwable $th) {
            // echo "error".$th;


            return back()->with('delete', 'Invalid Inserted data Phone or ID number');

        }
       


    }

    public function search(Request $request){
        $info = CaseInfo::find($request->id);
        $operation = "search";
        return view('message')->with('info', $info)->with('operation', $operation);


    }


    public function update (Request $request, $id)
    {
        CaseInfo::where('id',$id)->update(['j_comment'=>$request->j_comment,
        'case_date'=>$request->case_date,
         ]);
         return redirect('home')->with('success', 'Case judging date have been committed');

    }



    public function reports(Request $request, $id)
    {
        

        // $judge = Auth::user()->judge;
        // $str_judge = "$judge";  

        
        // CaseInfo::whereNotNull('j_comment')->where('case_type')->get();
        // return view('judge')->with('approved', $approved);
        

        $accept = CaseInfo::find($id);

        return view('reports')
        ->with('accept', $accept)->with('operation', 'print');

    }


    public function notify(Request $request, $id){

        $case = CaseInfo::find($id);
        $case->notified = 1;
        $case->save();


       //Notification Code
       // Notification::send(request()->user(), new message());
        
        return view('reports')
        ->with('case', $case)->with('operation', 'notified');
    }




    public function notified_page()
    {
        $cases = CaseInfo::whereNotNull('j_comment')->whereNotNull('notified')->get();
        return view('notified')->with('cases', $cases);
    }

    public function show_judge_cases(Request $request, $id)
    {
        

        
        
        $accept = CaseInfo::whereNotNull('j_comment')->where('case_type', $request->judge_type)->get();
        return view('judgereport')->with('operation', 'show')->with('accept', $accept);
        

       

    }





    public function print_judge_cases(Request $request, $id)
    {
        

        $accept = CaseInfo::whereNotNull('j_comment')->where('case_type', $request->judge_type)->get();
        return view('judgereport')->with('operation', 'print')->with('accept', $accept);
        

       

    }







    public function lawyers(){
        $lawyers =DB::select(" SELECT * FROM lawyers WHERE `deleted_at` IS NULL;");
        return view('lawyers')->with('lawyers', $lawyers);
    }


    public function lawyer_store(Request $request){
        $lawyer = Lawyers::insert($request->all());
        $lawyers =DB::select("SELECT * FROM lawyers WHERE `deleted_at` IS NULL;");
        return redirect('lawyers')->with('lawyers', $lawyers)->with('success', 'Lawyer Created Successfully');

    }


    public function lawyer_delete(Request $request, $id){


        $lawyer = Lawyers::find($id);
        $lawyer->delete();
        $lawyers =DB::select("SELECT * FROM lawyers WHERE `deleted_at` IS NULL;");
        return redirect('lawyers')->with('lawyers', $lawyers)->with('delete', 'Lawyer deleted Successfully');

    }



    

    public function lawyer_website(){

        $lawyers =DB::select("SELECT * FROM lawyers WHERE `deleted_at` IS NULL;");
        return view('lawyer')->with('lawyers', $lawyers);

    }



    


}



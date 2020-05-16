<?php

namespace App\Http\Controllers\HRDepartment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\JobFormIn;
use App\ResumeDoc;
use Illuminate\Support\Facades\Session;
use App\AddJob;


class JobForm extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title_page= 'Career';
        $jobData = AddJob::where('job_status', 'open')->orderBy('id', 'desc')->paginate(3);
        return view('Webpage.carrier', compact('jobData','title_page'));
    }

    public function Hrdash(){
        return view('HandleSection.HRDash');
    }

    // job view Form
    public function HrdashJob(){
        $appliedJobData= JobFormIn::orderBy('id','desc')->paginate(4);
        return view('HandleSection.viewJob',compact('appliedJobData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jobData=JobAdd::orderBy('id','desc')->where('job_status','open')->get();
        return view('Webpage.carrier',compact('jobData'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $inputData = $request->all();
        // $userData = Auth::user();
        // $userData->mkt_fileds();
        if ($file = $request->file('resume_doc_id')) {
            $nameData = time() . $file->getClientOriginalName();
            $file->move('resumeDocs', $nameData);
            $fileresume = ResumeDoc::create(['file' => $nameData]);
            $inputData['resume_doc_id'] =$fileresume->id;
        }
        JobFormIn::create($inputData);
        //echo "the data got added";
        Session::flash('User_Resume', 'Thanks for Sending the your details with
        us our Hr person can call to you if they think all the critriea is matching for job profile');
        return redirect('/carrier#userSubmit');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

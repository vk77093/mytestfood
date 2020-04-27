<?php

namespace App\Http\Controllers\HRDepartment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\JobFormIn;
use App\ResumeDoc;
use Illuminate\Support\Facades\Session;


class JobForm extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Webpage.carrier');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Webpage.carrier');
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

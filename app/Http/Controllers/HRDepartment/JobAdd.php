<?php

namespace App\Http\Controllers\HRDepartment;

use Illuminate\Support\Facades\Session;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Position;
use App\AddJob;

class JobAdd extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobData=AddJob::orderBy('id','desc')->paginate(4);
        return view('HandleSection.viewAddedJob',compact('jobData'));
    }

    //view for the position
    public function position(){
        $position=Position::orderBy('id','desc')->paginate(5);
        return view('HandleSection.viewPosition',compact('position'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $position=Position::all();
        return view('HandleSection.Addjob',compact('position'));
    }

    //position add function
    public function positionCreate(){
        return view('HandleSection.AddPostion');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
$jobData=$request->all();
AddJob::create($jobData);
Session::flash('jobAdded','A new Job is added');
return redirect('/HrJob');
    }

    // adding the position store
    public function storePos(Request $request){
        $position = $request->all();
        Position::create($position);
        Session::flash('position','A new Postion is added');
        return redirect('/position');

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

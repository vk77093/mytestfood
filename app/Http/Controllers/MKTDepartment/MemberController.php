<?php

namespace App\Http\Controllers\MKTDepartment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\MemberData;
use Illuminate\Support\Facades\Session;
use App\LabelType;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title_page= 'Become-A-Member';
        return view('Webpage.becomeAMember',compact('title_page'));
    }

    public function labelCreate(){
        return view('Marketing.addLabel');
    }
    public function labelView(){
        $labelData=LabelType::orderBy('id','desc')->get();
return view('Marketing.viewLabel',compact('labelData'));
    }

    /*
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showData(){
        $memberData=MemberData::orderBy('id','desc')->get();
        return view('Marketing.viewMember',compact('memberData'));
    }

    public function create()
    {
        return view('Webpage.becomeAMember');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
$memberData=$request->all();
MemberData::create($memberData);
Session::flash('memberData','Thanks for Submitting the your Details One of our
Executive will call you soon');
return redirect('/Become-A-Member#memberData');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function labelStore(Request $request){
$labelData=$request->all();
if($file=$request->file('labelFile')){
    $nameData=$file->getClientOriginalName();
    $file->move('labelDocs',$nameData);
    $labelData['labelFile']=$nameData;
}
LabelType::create($labelData);
Session::flash('labelData','A new label is added');
return redirect('/labelView');

     }
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

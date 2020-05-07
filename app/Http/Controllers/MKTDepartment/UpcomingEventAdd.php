<?php

namespace App\Http\Controllers\MKTDepartment;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\EventType;
use App\EventDoc;

use App\UpcomingEvent;

class UpcomingEventAdd extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventData=UpcomingEvent::orderBy('id','desc')->get();
        return view('Marketing.viewEvent',compact('eventData'));
    }
    // marketing Dashbord
    public function mktdash()
    {
        return view('Marketing.MKTDash');
    }
    // eventType view

    public function eventView()
    {
        $eventType=EventType::orderBy('id','desc')->get();
        return view('Marketing.viewEventType',compact('eventType'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $eventType = EventType::orderBy('id', 'desc')->get();
        return view('Marketing.addEvent', compact('eventType'));
    }

    //add Event Type
    public function createEventType()
    {
        return view('Marketing.addEventType');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $eventData = $request->all();
        if ($file = $request->file('event_doc_id')) {
            $name = $file->getClientOriginalName();
            $file->move('mktDocs', $name);
            $filemktdoc = EventDoc::create(['file' => $name]);
            $eventData['event_doc_id'] = $filemktdoc->id;
        }
        UpcomingEvent::create($eventData);
        Session::flash('eventCreate', 'A event got Added');
        return redirect('/mktEvent');
    }

    public function eventStore(Request $request)
    {
        $eventType = $request->all();
        //dd($eventType);
        EventType::create($eventType);
        Session::flash('eventType', 'A New Event is Added');
        return redirect('/eventType');
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
$eventData=UpcomingEvent::findOrFail($id);
$eventType=EventType::all();
return view('Marketing.editEvent',compact('eventType', 'eventData'));
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
        $eventData=UpcomingEvent::findOrfail($id);
        $eventData->update($request->all());
        Session::flash('eventCreate', 'A event got Added');
        return redirect('/mktEvent');
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

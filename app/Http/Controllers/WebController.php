<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AddJob;
use App\EventType;
use App\UpcomingEvent;


class WebController extends Controller
{
    public function about(){
        return view('Webpage.about');

    }
    public function product(){
        return view('Webpage.ourproduct');
    }
    public function present(){
        return view('Webpage.nationPresent');
    }
    public function whoweserve(){
        return view('Webpage.whoweserve');
    }
    public function ourbrand(){
        return view('Webpage.ourbrand');
    }
    public function yourbrand(){
        return view('Webpage.yourbrand');
    }
    public function participation(){
        $eventData = UpcomingEvent::where('event_status', 'closed')->orderBy('id', 'desc')->get();
        return view('Webpage.ourparticipation',compact('eventData'));
    }
    public function upcoming(){
        $eventType = EventType::orderBy('id', 'asc')->get();
$eventData=UpcomingEvent::where('event_status','open')->orderBy('id','desc')->get();
        return view('Webpage.upcoming', compact('eventType', 'eventData'));
    }
    public function contact(){
        return view('Webpage.contact');
    }
    public function carrier(){
        $jobData=AddJob::where('status','open')->orderBy('id','desc')->paginate(3);
        return view('Webpage.carrier',compact('jobData'));
    }


}

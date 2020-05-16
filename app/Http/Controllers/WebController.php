<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AddJob;
use App\EventType;
use App\UpcomingEvent;
use App\SalesPerson;


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
    public function nearYou(Request $request){
        $search=$request->input('search_area');
        if($search){
            $salesFetch = SalesPerson::where('area', $search)->where('status', 'active')->orderBy('id', 'desc')->get();
            //$salesFetch=SalesPerson::where(['area','=',$search],
           // ['status','=','active'])->orderBy('id', 'desc')->get();
        }else{
            $salesFetch=SalesPerson::where('status', 'active')->orderBy('id','desc')->get();
        }
        $salesFetch= $salesFetch;
        $salesPerson = SalesPerson::select('area')->distinct()->get();

        return view('Webpage.nearYou',compact('salesPerson', 'salesFetch'));
    }
    // public function searchNear(){
    //    // $search = '%' . $_POST['search_area'] . '%';
    //    $search=$_POST['search_area'];
    //     $salesFetch=SalesPerson::where('area', $search)->get();
    //    return redirect('/nearYou#result',compact('salesFetch'));
    //}
    public function whoweserve(){
        return view('Webpage.whoweserve');
    }
    public function ourbrand(){
        return view('Webpage.ourbrand');
    }
    // public function yourbrand(){
    //     return view('Webpage.yourbrand');
    // }
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

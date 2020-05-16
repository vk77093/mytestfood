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
        $title_page="ABOUT-US";
        return view('Webpage.about',compact('title_page'));

    }
    public function product(){
        $title_page="Our-Product";
        return view('Webpage.ourproduct',compact('title_page'));
    }
    public function present(){
        $title_page="Our Present";
        return view('Webpage.nationPresent',compact('title_page'));
    }
    public function nearYou(Request $request){
        $title_page="Near You";
        $search=$request->input('search_area');
        if($search){
            $salesFetch = SalesPerson::where('area', $search)->where('status', 'active')->orderBy('id', 'desc')->get();
            //$salesFetch=SalesPerson::where(['area','=',$search],
           // ['status','=','active'])->orderBy('id', 'desc')->get();
        }else{
            //$salesFetch=SalesPerson::where('status', 'active')->orderBy('id','desc')->get();
        }
        //$salesFetch= $salesFetch;
        $salesFetch;
        $salesPerson = SalesPerson::select('area')->distinct()->get();

        return view('Webpage.nearYou',compact('salesPerson', 'salesFetch','title_page'));
    }
    // public function searchNear(){
    //    // $search = '%' . $_POST['search_area'] . '%';
    //    $search=$_POST['search_area'];
    //     $salesFetch=SalesPerson::where('area', $search)->get();
    //    return redirect('/nearYou#result',compact('salesFetch'));
    //}
    public function whoweserve(){
        $title_page="Who-We-Serve";
        return view('Webpage.whoweserve',compact('title_page'));
    }
    public function ourbrand(){
        $title_page="Our-Brand";
        return view('Webpage.ourbrand',compact('title_page'));
    }
    // public function yourbrand(){
    //     return view('Webpage.yourbrand');
    // }
    public function participation(){
        $title_page="Our-Participation";
        $eventData = UpcomingEvent::where('event_status', 'closed')->orderBy('id', 'desc')->get();
        return view('Webpage.ourparticipation',compact('eventData', 'title_page'));
    }
    public function upcoming(){
        $title_page="Upcoming-Events";
        $eventType = EventType::orderBy('id', 'asc')->get();
$eventData=UpcomingEvent::where('event_status','open')->orderBy('id','desc')->get();
        return view('Webpage.upcoming', compact('eventType', 'eventData', 'title_page'));
    }
    public function contact(){
        $title_page="Contact-Us";
        return view('Webpage.contact',compact('title_page'));
    }
    public function carrier(){
        $title_page="Carrier";
        $jobData=AddJob::where('status','open')->orderBy('id','desc')->paginate(3);
        return view('Webpage.carrier',compact('jobData', 'title_page'));
    }


}

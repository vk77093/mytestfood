<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('Webpage.ourparticipation');
    }
    public function upcoming(){
        return view('Webpage.upcoming');
    }
    public function contact(){
        return view('Webpage.contact');
    }
    public function carrier(){
        return view('Webpage.carrier');
    }

}

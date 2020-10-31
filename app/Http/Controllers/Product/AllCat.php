<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AllCat extends Controller
{
    public function mayoCat(){
        $title_page="Mayonnaise Range";
        return view('ProductDescription.AllCat.mayo',compact('title_page'));
    }
    public function sandwichSpread(){
        $title_page="Salad & Dressing Range";
        return view('ProductDescription.AllCat.sandwich_salad',compact('title_page'));
    }
    public function tomato(){
        $title_page="Tomato ketchup Range";
        return view('ProductDescription.AllCat.tomatoketchup',compact('title_page'));
    }
    public function sauces(){
        $title_page="Sauces Range";
        return view('ProductDescription.AllCat.sauces',compact('title_page'));
    }
    public function gravies(){
        $title_page="Gravies & Chuntey Range";
        return view('ProductDescription.AllCat.gravies',compact('title_page'));
    }
    public function dips(){
        $title_page="Dips Range";
        return view('ProductDescription.AllCat.dips',compact('title_page'));
    }
    public function chocolate(){
        $title_page="Chocolate & Topping Range";
        return view('ProductDescription.AllCat.chocolate',compact('title_page'));
    }
    public function fruits(){
        $title_page="Fruit & Punches Range";
        return view('ProductDescription.AllCat.fruit',compact('title_page'));
    }
}

<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Mayo extends Controller
{
    public function mayo(){
        $title_page = "Mayo-First";
        return view('ProductDescription.mayo.first',compact('title_page'));
    }
}

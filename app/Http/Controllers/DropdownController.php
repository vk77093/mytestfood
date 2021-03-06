<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use DB;
use Illuminate\Support\Facades\DB;

class DropdownController extends Controller
{
    public function index()
    {
        $title_page='Your-Brand';
        $countries = DB::table("countries")->pluck("name", "id");
       // return view('Webpage.index', compact('countries'));

        return view('Webpage.yourbrand', compact('countries', 'title_page'));
    }

    public function getStateList(Request $request)
    {
        $states = DB::table("states")
            ->where("country_id", $request->country_id)
            ->pluck("name", "id");
        return response()->json($states);
    }

    public function getCityList(Request $request)
    {
        $cities = DB::table("cities")
            ->where("state_id", $request->state_id)
            ->pluck("name", "id");
        return response()->json($cities);
    }
}

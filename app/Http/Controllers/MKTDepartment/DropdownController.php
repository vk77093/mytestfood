<?php

namespace App\Http\Controllers\MKTDepartment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use DB;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\LabelType;
use App\YourBrand;
class DropdownController extends Controller
{
    public function index()
    {
        $title_page = 'Your-Brand';
        $countries = DB::table("countries")->pluck("name", "id");
        $labeldata = LabelType::orderBy('id', 'desc')->get();
        //$countries = DB::table("countries")->get();
        return view('Webpage.yourbrand', compact('countries', 'labeldata','title_page'));
    }

    public function getStateLists(Request $request)
    {
        $states = DB::table("states")
            ->where("country_id", $request->country_id)
            ->pluck("name", "id");
        //return view('Webpage.yourbrand', compact('states'));
        //return response()->json($states);
        return json_encode($states);


    }

    public function getCityLists(Request $request)
    {
        $cities = DB::table("cities")
            ->where("state_id", $request->state_id)
            ->pluck("name", "id");
        //return response()->json($cities);
        return json_encode($cities);
    }

    public function ViewYourBrand(){
$brandData=YourBrand::orderBy('id','desc')->get();
        return view('Marketing.viewYourBrand', compact('brandData'));

    }
    public function storeYourBrand(Request $request){
      $yourBrand=  $request->all();
      YourBrand::create($yourBrand);
      Session::flash('Brand_data','Thanks for submitting the your Request </br>
      one of our Executive will call you soon and discuss the further steps.');
      return redirect('/yourbrand#brand');
      //dd($yourBrand);

    }
}

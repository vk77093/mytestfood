<?php

namespace App\Http\Controllers\HRDepartment;

use App\Http\Controllers\Controller;
use App\SalesPerson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SalesPersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
$salesPerson=SalesPerson::paginate(10);
return view('HandleSection.viewSales',compact('salesPerson'));
          }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('HandleSection.addSales');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $salesPerson=$request->all();
        SalesPerson::create($salesPerson);
        Session::flash('sales_data','A new Sales Person Created Sucessfully');
        return redirect('/salesPer');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SalesPerson  $salesPerson
     * @return \Illuminate\Http\Response
     */
    public function show(SalesPerson $salesPerson)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SalesPerson  $salesPerson
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $salesPerson=SalesPerson::findOrfail($id);
        //    return redirect('/salesPer#edit-item',compact('salesperson'));
        return view('HandleSection.editSales', compact('salesPerson'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SalesPerson  $salesPerson
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SalesPerson $salesPerson, $id)
    {
//$salesPerson=$request->all();
$salesPerson=SalesPerson::findOrfail($id);
$salesPerson->update($request->all());
        Session::flash('sales_data', 'Data Got updated Sucessfully');
        return redirect('/salesPer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SalesPerson  $salesPerson
     * @return \Illuminate\Http\Response
     */
    public function destroy(SalesPerson $salesPerson)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\DiabeticMedicine;
use Illuminate\Http\Request;

class DiabeticMedicineController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicines = DiabeticMedicine::all();
        return view('dashboard.diabetic_medicine.index',compact('medicines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.diabetic_medicine.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        DiabeticMedicine::create(['name'=>$request->name]);

        return redirect()->route('diabetic_medicine.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DiabeticMedicine  $diabeticMedicine
     * @return \Illuminate\Http\Response
     */
    public function show(DiabeticMedicine $diabeticMedicine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DiabeticMedicine  $diabeticMedicine
     * @return \Illuminate\Http\Response
     */
    public function edit(DiabeticMedicine $diabeticMedicine)
    {
        return view('dashboard.diabetic_medicine.edit',compact('diabeticMedicine'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DiabeticMedicine  $diabeticMedicine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DiabeticMedicine $diabeticMedicine)
    {
        $diabeticMedicine->update(['name'=>$request->name]);

        return redirect()->route('diabetic_medicine.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DiabeticMedicine  $diabeticMedicine
     * @return \Illuminate\Http\Response
     */
    public function destroy(DiabeticMedicine $diabeticMedicine)
    {
        $diabeticMedicine->delete();

        return redirect()->route('diabetic_medicine.index');

    }
}

<?php

namespace App\Http\Controllers;

use App\HeartMedicine;
use Illuminate\Http\Request;

class HeartMedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicines = HeartMedicine::all();
        return view('dashboard.heart_medicine.index',compact('medicines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.heart_medicine.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       HeartMedicine::create(['name'=>$request->name]);

        return redirect()->route('heart_medicine.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\HeartMedicine  $heartMedicine
     * @return \Illuminate\Http\Response
     */
    public function show(HeartMedicine $heartMedicine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HeartMedicine  $heartMedicine
     * @return \Illuminate\Http\Response
     */
    public function edit(HeartMedicine $heartMedicine)
    {
         return view('dashboard.heart_medicine.edit',compact('heartMedicine'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HeartMedicine  $heartMedicine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HeartMedicine $heartMedicine)
    {
        $heartMedicine->update(['name'=>$request->name]);

        return redirect()->route('heart_medicine.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HeartMedicine  $heartMedicine
     * @return \Illuminate\Http\Response
     */
    public function destroy(HeartMedicine $heartMedicine)
    {
        $heartMedicine->delete();
        return redirect()->route('heart_medicine.index');
    }
}

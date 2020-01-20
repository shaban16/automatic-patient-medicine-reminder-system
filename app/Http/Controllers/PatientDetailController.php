<?php

namespace App\Http\Controllers;

use App\PatientDetail;
use Illuminate\Http\Request;

class PatientDetailController extends Controller
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
        $patients = PatientDetail::all();
        return view('dashboard.patient_detail.index',compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.patient_detail.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        PatientDetail::create([
             'name'=>$request->name,
             'phone'=>$request->phone,
             'type'=>$request->type,
        ]);
        return redirect()->route('patient_detail.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PatientDetail  $patientDetail
     * @return \Illuminate\Http\Response
     */
    public function show(PatientDetail $patientDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PatientDetail  $patientDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(PatientDetail $patientDetail)
    {
        return view('dashboard.patient_detail.edit',compact('patientDetail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PatientDetail  $patientDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PatientDetail $patientDetail)
    {
        $patientDetail->update(['name'=>$request->name]);

        return redirect()->route('patient_detail.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PatientDetail  $patientDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(PatientDetail $patientDetail)
    {
        $patientDetail->delete();

        return redirect()->route('patient_detail.index');
    }
}

<?php

namespace App\Http\Controllers;


use App\Food;
use App\Medicine;
use App\PatientDetail;
use App\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
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
        $schedules = Schedule::all();

        return view('dashboard.schedule.index',compact('schedules'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vars['patient'] = PatientDetail::all();
        $vars['medicine'] = Medicine::all();
        $vars['food'] = Food::all();
        
        
        
        return view('dashboard.schedule.create',compact('vars'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Schedule::create([
             'patient_name'=>$request->patient_name,
             'mobile_no'=>$request->mobile_no,
             'medicine_name'=>$request->medicine_name,
             'medicine_time'=>$request->medicine_time,
             'disease_type'=>$request->disease_type,
             'food_restricted'=>$request->food_restricted
         ]);
        return redirect()->route('schedule.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Schedule  $schedule Schedule::create([
             'patient_name'=>$request->patient_name,
             'mobile_no'=>$request->mobile_no,
             'medicine_name'=>$request->medicine_name,
             'medicine_time'=>$request->medicine_time,
             'desease_type'=>$request->desease_type,
             'food_restricted'=>$request->food_restricted]);
     * @return \Illuminate\Http\Response
     */
    public function show(Schedule $schedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function edit(Schedule $schedule)
    {
        return view('dashboard.schedule.edit',compact('schedule'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Schedule $schedule)
    {
         $schedule->update([
             'patient_name'=>$request->patient_name,
             'mobile_no'=>$request->mobile_no,
             'medicine_name'=>$request->medicine_name,
             'medicine_time'=>$request->medicine_time,
             'disease_type'=>$request->type,
             'food_restricted'=>$request->food_restricted
        ]);
         
        return redirect()->route('schedule.index');

       }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function destroy(Schedule $schedule)
    {
        $schedule->delete();
        return redirect()->route('schedule.index');
    }
}

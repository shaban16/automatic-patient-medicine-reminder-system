<?php

namespace App\Http\Controllers;

use App\medicine;
use Illuminate\Http\Request;

class MedicineController extends Controller
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
        $medicines = Medicine::all();
        return view('dashboard.medicine.index',compact('medicines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
       return view('dashboard.medicine.create');
    }

        
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       Medicine::create([
             'name'=>$request->name,
             'type'=>$request->type,
         ]);

       return redirect()->route('medicine.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function show(medicine $medicine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function edit(medicine $medicine)
    {
         return view('dashboard.medicine.edit',compact('medicine'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, medicine $medicine)
    {
         $medicine->update(['name'=>$request->name,
                            'type'=>$request->type,

     ]);

             return redirect()->route('medicine.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function destroy(medicine $medicine)
    {
        $medicine->delete();
        return redirect()->route('medicine.index');
    }
}

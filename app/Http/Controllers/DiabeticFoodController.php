<?php

namespace App\Http\Controllers;

use App\DiabeticFood;
use Illuminate\Http\Request;

class DiabeticFoodController extends Controller
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
        $foods = DiabeticFood::all();
        return view('dashboard.diabetic_food.index',compact('foods'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.diabetic_food.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DiabeticFood::create(['name'=>$request->name]);

        // session('msg','One Entery added successfully');
        $request->session()->flash('msg', 'One Food added successfully');


        return redirect()->route('diabetic_food.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DiabeticFood  $diabeticFood
     * @return \Illuminate\Http\Response
     */
    public function show(DiabeticFood $diabeticFood)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DiabeticFood  $diabeticFood
     * @return \Illuminate\Http\Response
     */
    public function edit(DiabeticFood $diabeticFood)
    {
        return view('dashboard.diabetic_food.edit',compact('diabeticFood'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DiabeticFood  $diabeticFood
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DiabeticFood $diabeticFood)
    {
        $diabeticFood->update(['name'=>$request->name]);

        return redirect()->route('diabetic_food.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DiabeticFood  $diabeticFood
     * @return \Illuminate\Http\Response
     */
    public function destroy(DiabeticFood $diabeticFood)
    {
        $diabeticFood->delete();

        return redirect()->route('diabetic_food.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\HeartFood;
use Illuminate\Http\Request;

class HeartFoodController extends Controller
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
        $foods = HeartFood::all();
        return view('dashboard.heart_food.index',compact('foods'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('dashboard.heart_food.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         HeartFood::create(['name'=>$request->name]);

         return redirect()->route('heart_food.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\HeartFood  $heartFood
     * @return \Illuminate\Http\Response
     */
    public function show(HeartFood $heartFood)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HeartFood  $heartFood
     * @return \Illuminate\Http\Response
     */
    public function edit(HeartFood $heartFood)
    {
        return view('dashboard.heart_food.edit',compact('heartFood'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HeartFood  $heartFood
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HeartFood $heartFood)
    {
         $heartFood->update(['name'=>$request->name]);

        return redirect()->route('heart_food.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HeartFood  $heartFood
     * @return \Illuminate\Http\Response
     */
    public function destroy(HeartFood $heartFood)
    {
        $heartFood->delete();

        return redirect()->route('heart_medicine.index');
    }
}

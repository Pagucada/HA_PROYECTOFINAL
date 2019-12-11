<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Car;
use App\CarModel;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('home');
    }

    public function salesUsed() 
    {
        $models = CarModel::all();
        $brands = Brand::all();
        $cars = Car::where('status', 0)->get();

        return view('sales' , [
            'cars' => $cars,
            'brands' => $brands,
            'models' => $models
        ]);
    }

    public function salesNew()
    {
        $models = CarModel::all();
        $brands = Brand::all();
        $cars = Car::where('status', 1)->get();

        return view('sales', [
            'cars' => $cars,
            'brands' => $brands,
            'models' => $models
        ]);
    }

    public function filterCars(Request $request) 
    {
        $cars = Car::where('year', $request->input('year')) 
        ->get();
        $models = CarModel::all();
        $brands = Brand::all();

        return view('sales', [
            'cars' => $cars,
            'brands' => $brands,
            'models' => $models
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        //
    }
}

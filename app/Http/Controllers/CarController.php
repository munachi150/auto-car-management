<?php

namespace App\Http\Controllers;
use App\Car;

use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cars.create');    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $car= new Car();
        $car->name = $request->name;
        $car->email = $request->email;
        $car->phone_no = $request->phone_no;
        $car->price = $request->price;
        $car->condition = $request->condition;
        $car->transmission = $request->transmission;
        $car->year = $request->year;
        $car->make = $request->make;
        $car->color = $request->color;
        $car->url = str_slug($request->name);
        if ($request->hasFile('picture')) {
            $picName = "DOC".uniqid().time().'.'.$request->picture->getClientOriginalExtension();
            $request->picture->move(public_path().'/uploads/', $picName);
            $car->picture='uploads/'.$picName;
        }
            $car->save();
            return redirect('all_cars');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($url)
    {
        $car = Car::where('url', $url)->first();
    return view('cars.show',compact('car'));
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car = Car::FindOrFail($id);
        return view('cars.edit', compact('car'));

    }
    public function delete($id)
    {
        $car = Car::FindOrFail($id);
        return view('cars.delete', compact('car'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $car = Car::FindOrFail($id);
        $car->name = $request->name;
        $car->email = $request->email;
        $car->phone_no = $request->phone_no;
        $car->price = $request->price;
        $car->condition = $request->condition;
        $car->transmission = $request->transmission;
        $car->year = $request->year;
        $car->make = $request->make;
        $car->color = $request->color;
        if ($request->hasFile('picture')) {
            $picName = "DOC".uniqid().time().'.'.$request->picture->getClientOriginalExtension();
            $request->picture->move(public_path().'/uploads/', $picName);
            $cars->picture='uploads/'.$picName;
    }
    $car->save();
            return redirect('all_cars');
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car = Car::FindOrFail($id);
        $car->delete();
        return redirect('/');
    }
}

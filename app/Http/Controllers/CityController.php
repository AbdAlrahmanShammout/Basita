<?php

namespace App\Http\Controllers;

use App\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $per_page = Input::get('per_page',8);
        $list = City::paginate($per_page);
        return view('city.index', compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('city.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|unique:cities|max:190',
        ]);

        $city = new City();
        $city->name = $request->name;
        $city->save();
        return back()->with('success', 'City created successfully.');
//        return redirect()->route('city.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function show(City $city)
    {
        return view('city.show',compact('city'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function edit(City $city)
    {

        return view('city.edit',compact('city'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, City $city)
    {
        $request->validate([
            'name' => 'required|string|unique:cities,name,'.$city->id,'|max:190',
        ]);

        $city->name = $request->name;
        $city->save();
        return back()->with('success', 'City updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\City $city
     * @return void
     * @throws \Exception
     */
    public function destroy(City $city)
    {
        // dd("tetasda");
        $city->delete();
        return back()->with('success', 'City delete successfully.');
    }
}

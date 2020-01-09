<?php

namespace App\Http\Controllers;

use App\City;
use App\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation\Rule;

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $per_page = Input::get('per_page',8);
        $list = Region::paginate($per_page);
        return view('region2.index', compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listCites = City::all();
        return view('region2.create', compact('listCites'));
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
            'name' => 'required|string|unique:regions|max:190',
            'city_id' => 'required|exists:cities,id',
        ]);

        $region = new Region();
        $region->name = $request->name;
        $region->city_id = $request->city_id;
        $region->save();
        return back()->with('success', 'Region created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function show(Region $region)
    {
        return view('region2.show', compact('region'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function edit(Region $region)
    {
        return view('region2.edit',compact('region'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Region $region)
    {
        $request->validate([
            'name' => 'required|string|max:190|'.Rule::unique('regions')->ignore($region->id)
                    ->where('city_id', $request->city_id),
            'city_id' => 'required|exists:regions,id',
        ]);

        $region->name = $request->name;
        $region->save();
        return back()->with('success', 'Region updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Region $region
     * @return void
     * @throws \Exception
     */
    public function destroy(Region $region)
    {
        $region->delete();
    }
}

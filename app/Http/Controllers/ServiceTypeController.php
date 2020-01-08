<?php

namespace App\Http\Controllers;

use App\ServiceType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class ServiceTypeController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $per_page = Input::get('per_page',8);
        $list = ServiceType::paginate($per_page);
        return view('servicesTypes.list', compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('servicesTypes.create');
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
            'name' => 'required|string|unique:service_types|max:190',
        ]);

        $serviceType = new ServiceType();
        $serviceType->name = $request->name;
        $serviceType->save();
        return back()->with('success', 'Service Type created successfully.');
//        return redirect()->route('serviceType.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ServiceType  $serviceType
     * @return \Illuminate\Http\Response
     */
    public function show(ServiceType $serviceType)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ServiceType  $serviceType
     * @return \Illuminate\Http\Response
     */
    public function edit(ServiceType $serviceType)
    {
        return view('servicesTypes.edit',compact('serviceType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ServiceType  $serviceType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ServiceType $serviceType)
    {
        dd("updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ServiceType  $serviceType
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServiceType $serviceType)
    {
        //
    }
}

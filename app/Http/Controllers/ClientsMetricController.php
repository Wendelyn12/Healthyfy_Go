<?php

namespace App\Http\Controllers;
use App\Models\ClientsMetric;


use Illuminate\Http\Request;

class ClientsMetricController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $metrics = ClientsMetric::all();
         return view ('metrics.index')->with('metrics', $metrics);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('metrics.create');
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
        $input = $request->all();
        ClientsMetric::create($input);
        return redirect('metric')->with('flash_message', 'Metric Reading Information Addedd!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $metric = ClientsMetric::find($id);
        return view('metrics.show')->with('metric', $metric);
        
   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $metric = ClientsMetric::find($id);
        return view('metrics.edit')->with('metrics', $metric);
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
        //
        $metric = ClientsMetric::find($id);
        $input = $request->all();
        $metric->update($input);
        return redirect('metric')->with('flash_message', ' Updated!');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)

    {
        //
        ClientsMetric::destroy($id);
        return redirect('metric')->with('flash_message', ' deleted!');  
    }
}

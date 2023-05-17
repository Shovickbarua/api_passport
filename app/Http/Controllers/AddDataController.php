<?php

namespace App\Http\Controllers;

use App\Models\AddData;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AddDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = AddData::all();
        return response($data, 200);
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
        $add_data = new AddData();
        $add_data->name         =$request->name;
        $add_data->description  =$request->description;
        $add_data->save(); 

        return ['Result'=>'Data inserted successfully'];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AddData  $addData
     * @return \Illuminate\Http\Response
     */
    public function show(AddData $addData)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AddData  $addData
     * @return \Illuminate\Http\Response
     */
    public function edit(AddData $addData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AddData  $addData
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $add_data =AddData::find($request->id);
        $add_data->name         =$request->name;
        $add_data->description  =$request->description;
        $add_data->save(); 

        return ['Result'=>'Data inserted successfully'];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AddData  $addData
     * @return \Illuminate\Http\Response
     */
    public function destroy(AddData $addData)
    {
        //
    }
}

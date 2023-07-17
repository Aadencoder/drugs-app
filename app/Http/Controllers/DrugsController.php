<?php

namespace App\Http\Controllers;

use App\Models\Drugs;
use App\Http\Requests\StoreDrugsRequest;
use App\Http\Requests\UpdateDrugsRequest;

class DrugsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('applicant.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDrugsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDrugsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Drugs  $drugs
     * @return \Illuminate\Http\Response
     */
    public function show(Drugs $drugs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Drugs  $drugs
     * @return \Illuminate\Http\Response
     */
    //public function edit(Drugs $drugs)
    public function edit()
    {
        //
        return view('applicant.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDrugsRequest  $request
     * @param  \App\Models\Drugs  $drugs
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDrugsRequest $request, Drugs $drugs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Drugs  $drugs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Drugs $drugs)
    {
        //
    }
}

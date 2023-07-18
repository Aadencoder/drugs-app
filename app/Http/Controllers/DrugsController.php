<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDrugsRequest;
use App\Http\Requests\UpdateDrugsRequest;
use App\Models\Drugs;
use Illuminate\Support\Carbon;

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
        $drug = new Drugs;
        return view('applicant.create', compact(['drug']));
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
        $expiration_date = Carbon::now()->addYear(1)->toDateTimeString();  
        $request['expiration_date'] = $expiration_date;
        $drug = new Drugs;
        $drug->create($request->all());
        return redirect()->route('applicant.home')->with('status', 'Drug created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Drugs  $drugs
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
          $drug = Drugs::findOrFail($id);
        return view('applicant.show' , compact(['drug']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Drugs  $drugs
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $drug = Drugs::findOrFail($id);
        return view('applicant.edit' , compact(['drug']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDrugsRequest  $request
     * @param  \App\Models\Drugs  $drugs
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDrugsRequest $request, $id)
    {
        //
            $drug = Drugs::findOrFail($id);
             $drug->update($request->all());
        return redirect()->route('applicant.home')->with('status', 'Entity updated Successfully!');
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

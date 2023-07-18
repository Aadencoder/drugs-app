<?php

namespace App\Http\Controllers;

use App\Models\Drugs;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ReviewerController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:ROLE_REVIEWER');
    }

    public function index()
    {
     $drugs = Drugs::orderBy('id','desc')->paginate('10');
     return view('reviewer.home', compact(['drugs']));
 }

 public function updateStatus(Request $request, $id)
 {
        //
    if ($request->approval_status == "approved") {
      $approval_date = Carbon::now()->toDateTimeString();  
      $request['approval_date'] = $approval_date;
      $expiration_date = Carbon::now()->addYear(1)->toDateTimeString();  
      $request['expiration_date'] = $expiration_date;   
  } else {
    $id = $request->id;
  }
   $drug = Drugs::findOrFail($id);
  $drug->update($request->all());
  return redirect()->route('reviewer.home')->with('status', 'Entity updated Successfully!');
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
        return view('reviewer.show' , compact(['drug']));
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
        return view('reviewer.edit' , compact(['drug']));
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
        return redirect()->route('reviewer.home')->with('status', 'Entity updated Successfully!');
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Drugs;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    //
     public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:ROLE_APPLICANT');
    }

    public function index()
    {
        $drugs = Drugs::where('created_by', auth()->user()->id)->orderBy('id','desc')->paginate('10');
        return view('applicant.home', compact(['drugs']));
    }
}

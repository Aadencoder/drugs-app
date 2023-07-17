<?php

namespace App\Http\Controllers;

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
        return view('applicant.home');
    }
}

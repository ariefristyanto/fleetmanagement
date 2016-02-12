<?php namespace App\Http\Controllers;

use Auth;

class CompanyController extends Controller {

    /**
     */
    public function __construct()
    {
    }


    /**
     *
     */
    public function show()
    {
        $company = Auth::user()->company;
        return view('company.show', compact('company'));
    }


}
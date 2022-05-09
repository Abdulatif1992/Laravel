<?php

namespace App\Http\Controllers;
use App\Models\Company;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        //$this->middleware('auth', ['only' => 'index']);
        $this->middleware('auth');
    }

    public function Index()
    {
        $companies = Company::all();
        
        return view('company.index', compact('companies'));
    }

    public function ajax_form(){
        return view('company.ajax-form');
    }

    public function ajax(Request $request){

        
        return response()->json(['result'=>$request->file]);
    }

    public function Admin()
    {

        return view('admin.adminHome');
    }
}

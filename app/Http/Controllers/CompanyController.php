<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function contact(){
        return view('company.contact');
    }

    public function terms(){
        return view('company.terms');
    }

    public function howitworks(){
        return view('company.howitworks');
    }
}

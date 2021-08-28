<?php

namespace App\Http\Controllers;

use App\Models\Designation as ModelsDesignation;
use Illuminate\Http\Request;

class Designation extends Controller
{
    public function index(){
        $designation = ModelsDesignation::all();
        return view('admin.designation.index',compact('designation'));

    }
}

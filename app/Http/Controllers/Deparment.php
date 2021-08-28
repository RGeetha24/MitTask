<?php

namespace App\Http\Controllers;
use App\Models\Department as ModelsDepartment;


use Illuminate\Http\Request;

class Deparment extends Controller
{
    public function index(){
        $department = ModelsDepartment::all();
        return view('admin.department.index',compact('department'));

    }
}

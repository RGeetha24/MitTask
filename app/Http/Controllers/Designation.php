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
    public function descadd(Request $request)
    {
        $designation = new ModelsDesignation;
        $designation->name = $request->input('name');

        $this->validate(
            $request,
                [

                    'name'=>'required',
                ],
                [

                    'name.required'=>'Designation Name Required',

                ]
        );
        $designation->save();
        return redirect('/designation')->with('status','Designation added successfully');

    }

    public function edit($id)
    {
        $designation = ModelsDesignation::findOrFail($id);

        return view('admin.designation.edit',compact('designation'));

    }

    public function update(Request $request,$id)
    {
        $designation = ModelsDesignation::find($id);
        $designation->name = $request->input('name');
        $designation->update();
        return redirect('/designation')->with('status','Your data is updated');

    }

    public function delete($id)
    {
        $designation = ModelsDesignation::findOrFail($id);
        $designation->delete();

        return redirect('/designation')->with('status','Your data is deleted');
    }
}

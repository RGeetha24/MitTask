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

    public function deptadd(Request $request)
    {
        $department = new ModelsDepartment;
        $department->name = $request->input('name');

        $this->validate(
            $request,
                [

                    'name'=>'required',
                ],
                [

                    'name.required'=>'Department Name Required',

                ]
        );
        $department->save();
        return redirect('/department')->with('status','Department added successfully');

    }

    public function edit($id)
    {
        $department = ModelsDepartment::findOrFail($id);

        return view('admin.department.edit',compact('department'));

    }

    public function update(Request $request,$id)
    {
        $department = ModelsDepartment::find($id);
        $department->name = $request->input('name');
        $department->update();
        return redirect('/department')->with('status','Your data is updated');

    }

    public function delete($id)
    {
        $department = ModelsDepartment::findOrFail($id);
        $department->delete();

        return redirect('/department')->with('status','Your data is deleted');
    }
}

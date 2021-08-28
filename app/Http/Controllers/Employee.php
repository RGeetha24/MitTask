<?php

namespace App\Http\Controllers;
use App\Models\Designation as ModelsDesignation;
use App\Models\Department as ModelsDepartment;
use App\Models\Employee as ModelsEmployee;


use Illuminate\Http\Request;

class Employee extends Controller
{
    public function index(){
        $designation = ModelsDesignation::all();
        $department = ModelsDepartment::all();

        return view('admin.employee.add',compact('designation','department'));

    }
    public function addemp(Request $request)
    {
        $employee = new ModelsEmployee;
        $employee->name = $request->input('emp_name');
        $employee->desc_id = $request->input('desc_id');
        $employee->dept_id = $request->input('dept_id');
        $employee->salary = $request->input('salary');


        $this->validate(
            $request,
                [

                    'emp_name'=>'required',
                    'salary'=>'required',
                    'desc_id'=>'required',
                    'dept_id'=>'required',

                ],
                [

                    'emp_name.required'=>'Employee Name Required',
                    'salary.required'=>'Salary Required',
                    'desc_id.required'=>'Designation Required',
                    'dept_id.required'=>'Department Required',


                ]
        );
        $employee->save();
        return redirect('/viewemp')->with('status','Employee added successfully');

    }

    public function viewemp()
    {
        $employee = ModelsEmployee::all();
        return view('admin.employee.view',compact('employee'));

    }
    public function edit($id)
    {
        $employee = ModelsEmployee::findOrFail($id);
        $designation = ModelsDesignation::all();
        $department = ModelsDepartment::all();

        return view('admin.employee.empedit',compact('employee','designation','department'));

    }

    public function update(Request $request,$id)
    {
        $employee = ModelsEmployee::find($id);
        $employee->name = $request->input('emp_name');
        $employee->desc_id = $request->input('desc_id');
        $employee->dept_id = $request->input('dept_id');
        $employee->salary = $request->input('salary');
        $employee->update();
        return redirect('/viewemp')->with('status','Your data is updated');

    }

    public function delete($id)
    {
        $employee = ModelsEmployee::findOrFail($id);
        $employee->delete();

        return redirect('/viewemp')->with('status','Your data is deleted');
    }

}

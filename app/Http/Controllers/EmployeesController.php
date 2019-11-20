<?php

namespace App\Http\Controllers;
use App\Employee;

use Illuminate\Http\Request;

class EmployeesController extends Controller
{
	public function index()
	{
		return view('employees.index');
	}
    
    public function create()
    {
    	return view('employees.create');

    }
    public function edit($id)
    {
    	return view('employees.edit');

    }
    public function store(Request $request)
    {
         $employee= new Employee;
         $employee->name=$request->name;
        $employee->title=$request->title;
        $employee->address=$request->address;
        $employee->salary=$request->salary;
        $employee->phone=$request->phone;
        $employee->save();


    }
}

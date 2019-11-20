<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RolesController extends Controller
{
    public function index()
	{
		return view('roles.index');
	}
    
    public function create()
    {
    	return view('roles.create');

    }
    public function edit($id)
    {
    	return view('roles.edit');

}

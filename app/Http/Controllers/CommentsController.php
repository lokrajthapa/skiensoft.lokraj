<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function index()
	{
		return view('comments.index');
	}
    
    public function create()
    {
    	return view('comments.create');

    }
    public function edit($id)
    {
    	return view('comments.edit');

}

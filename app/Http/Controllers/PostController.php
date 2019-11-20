<?php

namespace App\Http\Controllers;
use App\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
	{
		return view('post.index');
	}
    
    public function create()
    {
    	return view('post.create');

    }
    public function edit($id)
    {
    	return view('post.edit');
    }	
    public function store(Request $request)
    {
        $post= new Post;
        $post->title=$request->title;
        $post->description=$request->description;
        $post->save();

    }

}

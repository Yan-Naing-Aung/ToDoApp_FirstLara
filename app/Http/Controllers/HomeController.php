<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    function index(){
    	$data = POST::all();
    	return view('home',compact("data"));
    }

    function new(){
    	return view('new');
    }
    function store(Request $request){
	    $validatedData = $request->validate([
	        'title' => 'required',
	        'desc' => 'required',
	    ]);
	    $data = new Post();

	    $data->title = $request->title;
	    $data->description = $request->desc;
	    $data->save();
    	return redirect('home');
    }
    function edit($id){
    	$data = Post::findOrFail($id);

    	return view('edit',compact("data"));
    }
    function update(Request $request,$id){
    	$validatedData = $request->validate([
	        'title' => 'required',
	        'desc' => 'required',
	    ]);

	    $data = Post::findOrFail($id);

	    $data->title = $request->title;
	    $data->description = $request->desc;
	    $data->save();
    	return redirect('home');
    }
    function delete($id){
    	Post::findOrFail($id)->delete();
    	return redirect('home');
    }
}

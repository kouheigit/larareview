<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class firstController extends Controller
{
	public function first(Request $request)
	{	
		return view('first.first');
	}
	public function firstpost(Request $request)
	{
	       $name = $request->input('name');
	       $age = $request->input('age');
	       $come = $request->input('come');
               
	       DB::table('first')->insert(['id'=>'1']); 
	       DB::table('first')->insert(['name'=>$name]);	                     DB::table('first')->insert(['age'=>$age]);
	       DB::table('first')->insert(['come'=>$come]);

	      return redirect('first');

	}
}

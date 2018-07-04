<?php

namespace Peyman3d\Denapia\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DenapiaController extends Controller
{
 
	public function dashboard(){
		
		return view('denapia::admin.dashboard');
		
	}
	
}

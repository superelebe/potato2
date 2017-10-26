<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminisController extends Controller
{
	public function adminpanel(){
		return view('adminis.adminpanel');
	}
}

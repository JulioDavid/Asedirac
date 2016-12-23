<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
*	Permite ver formularios 
**/
class FormulariosController extends Controller
{

	/**
	* Create a new controller instance
	* 
	**/
	public function __construct(){
		$this->middleware('auth');
	}


	public function nueva_asesoria(){
		return view('formularios.nueva_asesoria');
	}
    
}

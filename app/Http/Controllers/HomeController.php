<?php

namespace App\Http\Controllers;

use App\Models\People;
use Illuminate\Http\Request;

class HomeController extends Controller
{
	public function index()
	{
		$people = People::get();
		return view('home', compact('people'));
	}

	public function hola($hola = null)
	{
		if ($hola == null) return 'no hay nadie';
		return "hola {$hola}";
	}
}

<?php

namespace App\Http\Controllers;

class ObservationController extends BaseController
{

	public function index()
	{
		$stations = array('Voice of America', 'Radio Free China', 'Radio India');

		return view('observation')->with('stations', $stations);
	}

	public function add()
	{

	}

}
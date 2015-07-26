<?php

namespace App\Http\Controllers;

use DateTime;

class ObservationController extends BaseController
{

	public function index()
	{
		$stations = array('Voice of America', 'Radio Free China', 'Radio India');
		$schedules = array('Cojo Guide to Shortwave', 'Hammertown Shortwave');
		$strength = range(1,5);
		$sources = array('US', 'China', 'Japan');
		$destinations = array('US', 'China', 'Japan');
		$now = new DateTime();

		return view('observation')
			->with('now', $now->format('m/d/Y h:s'))
			->with('sources', $sources)
			->with('destinations', $destinations)
			->with('strength', $strength)
			->with('schedules', $schedules)
			->with('stations', $stations);
	}

	public function add()
	{

		

	}

}
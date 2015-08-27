<?php

namespace App\Http\Controllers;

use App\Observation;
use App\RadioShow;
use App\Schedule;
use App\SourceDestination;
use DateTime;
use App\Station;
use Illuminate\Support\Facades\Input;

class ObservationController extends BaseController
{

	public function index()
	{

		$stations = $this->createSelectArray(Station::all());
		$radioShows = $this->createSelectArrayWithBlank(RadioShow::all());
		$schedules = $this->createSelectArrayWithBlank(Schedule::all());
		$strength = range(1,5);
		$sources = $this->createSelectArray(SourceDestination::all());
		$destinations = $this->createSelectArray(SourceDestination::all());
		$now = new DateTime();

		return view('observation')
			->with('now', $now->format('m/d/Y h:s'))
			->with('sources', $sources)
			->with('destinations', $destinations)
			->with('strength', $strength)
			->with('schedules', $schedules)
			->with('radioShows', $radioShows)
			->with('stations', $stations);
	}

	public function add()
	{

		$observation = new Observation();
		$observation->frequency = Input::get('frequency');
		$observation->station_id = Input::get('station_id');
		$observation->schedule_id = Input::get('schedule_id');
		$observation->strength = Input::get('strength');
		$observation->description = Input::get('description');
		$observation->destination = Input::get('destination');
		$observation->source = Input::get('source');
		$observation->datetime = Input::get('datetime');
		$observation->radioshow_id = Input::get('radioshow_id');

		$observation->save();

		return $this->index();

	}

	public function addStation()
	{

		return $this->index();

	}

	private function createSelectArray($someEloquentObjects)
	{
		$returnArray = array();
		foreach ($someEloquentObjects as $object) {
			$returnArray[$object->id] = $object->name;
		}

		return $returnArray;
	}

	private function createSelectArrayWithBlank($someEloquentObjects)
	{
		$returnArray = array('' => '');

		$returnArray = array_merge($returnArray, $this->createSelectArray($someEloquentObjects));

		return $returnArray;
	}

}
<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\Station;
use App\RadioShow;
use App\Observation;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		// $this->call('UserTableSeeder');

		$stations = Station::all();

		foreach ($stations as $station) {
			$station->delete();
		}

		$observations = Observation::all();

		foreach ($observations as $observation) {
			$observation->delete();
		}

		$radioShows = RadioShow::all();

		foreach ($radioShows as $radioShow) {
			$radioshow->delete();
		}

		$s = new Station();
		$s->name = "Voice of America";
		$s->description = "Voice of America";
		$s->save();

		$s = new Station();
		$s->name = "Radio Free China";
		$s->description = "Radio Free China";
		$s->save();

		$s = new Station();
		$s->name = "Radio India";
		$s->description = "Radio India";
		$s->save();

	}

}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\Station;
use App\RadioShow;
use App\Observation;
use App\SourceDestination;
use App\Schedule;

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

		foreach (Station::all() as $station) {
			$station->delete();
		}

		foreach (Observation::all() as $observation) {
			$observation->delete();
		}

		foreach (RadioShow::all() as $radioShow) {
			$radioShow->delete();
		}

		foreach (SourceDestination::all() as $sd) {
			$sd->delete();
		}

		foreach (Schedule::all() as $schedule) {
			$schedule->delete();
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


		$s = new SourceDestination();
		$s->name = "US";
		$s->save();

		$s = new SourceDestination();
		$s->name = "China";
		$s->save();

		$s = new SourceDestination();
		$s->name = "Canada";
		$s->save();

		$schedules = array('Cojo Guide to Shortwave', 'Hammertown Shortwave');
		foreach ($schedules as $schedule) {
			$s = new Schedule();
			$s->name = $schedule;
			$s->year_published = '2015';
			$s->save();
		}

		$r = new RadioShow();
		$r->name = "Jimmys Super Hour";
		$r->description = "Jimmy rambles.";
		$r->save();

		$r = new RadioShow();
		$r->name = "Jonnys Super Hour";
		$r->description = "Jonny Rambles";
		$r->save();

		$r = new RadioShow();
		$r->name = "Cojo Radio Hour";
		$r->description = "Dont listen if you value your sanity.";
		$r->save();



	}

}

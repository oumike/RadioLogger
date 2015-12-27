<?php 

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

use App\RadioShow;
use App\ShowLanguage;

class ImportScheduleCommand extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'cojo:importschedule';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Imports shortwave schedule from file.';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function fire()
	{
		$this->ImportRadioShows();
		$this->ImportLanguages();
	}

	private function ImportLanguages()
	{
		foreach (ShowLanguage::all() as $language) {
			$language->delete();
		}

		$languageFile = "/home/mike/Downloads/language.txt";
		$languageData = explode(PHP_EOL, file_get_contents($languageFile));

		foreach ($languageData as $data) {
			if (strpos($data, ";") === 0) {
				continue;
			}

			$data = trim($data);
			$data = explode(' ', $data, 2);

			if (isset($data[1])) {
				$sl = new ShowLanguage();
				$sl->name = $data[0];
				$sl->description = $data[1];
				$sl->save();
			}
		}


	}

	private function ImportRadioShows()
	{

		// Import Radio Show information
		foreach (RadioShow::all() as $show) {
			$show->delete();
		}

		$broadcastFile = "/home/mike/Downloads/broadcas.txt";
		$broadcastData = explode(PHP_EOL, file_get_contents($broadcastFile));

		foreach ($broadcastData as $data) {
			// Ignore all lines starting with a semi-colon
			if (strpos($data, ";") === 0) {
				continue;
			}

			$data = trim($data);
			$data = explode(' ', $data, 2);

			if (isset($data[1])) {
				$show = new RadioShow();
				$show->name = $data[0];
				$show->description = $data[1];
				$show->save();
			}

		}
	}
	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return [
		];
	}

	/**
	 * Get the console command options.
	 *
	 * @return array
	 */
	protected function getOptions()
	{
		return [
		];
	}

}

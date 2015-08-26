<?php 

namespace App\Commands;

use App\Commands\Command;

use Illuminate\Contracts\Bus\SelfHandling;

class DoStuff extends Command implements SelfHandling 
{

	/**
	 * Construct
	 */
	public function __construct()
	{
		//
	}

	/**
	 * Execute the command.
	 *
	 * @return void
	 */
	public function handle()
	{
		//

		print "hello";

	}

}

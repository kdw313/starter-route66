<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Charlie extends Application
{

	function __construct()
	{
		parent::__construct();
	}

        /**
	 * Show just one actor.
	 * Moved here to make it easy to implement other controllers
	 */
	public function brown()
	{
		parent::show(3);
	}

}

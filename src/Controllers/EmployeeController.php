<?php

namespace App\Controllers;

use App\Interfaces\Application;
use App\Libraries\DisplayEngine;

class EmployeeController implements Application {

	public function initialize() {


	}

	public function execute() {
		return DisplayEngine::render( 'index.html', [ 'name' => 'Rohit', 'designation' => 'Sr. Engg.' ] );

	}

	public function finalize() {

	}
}
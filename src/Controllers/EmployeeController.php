<?php

namespace App\Controllers;

use App\Interfaces\Application;

class EmployeeController implements Application {

	public function initialize() {
		echo "Hey initialized\n";

	}

	public function execute() {
		echo "Hey executed\n";
	}

	public function finalize() {
		echo "Hey finalized\n";
	}
}
<?php

namespace App\Router;

use App\Controllers\EmployeeController;
use App\Interfaces\Application;
use App\Interfaces\Routable;

class Router implements Routable {

	public $routes = [
		'employee' => EmployeeController::class
	];

	function run() {
		$strModule = isset( $_GET['module'] ) ? $_GET['module'] : 'default';

		if( isset( $this->routes[$strModule] ) ) {
			$objController = new $this->routes[$strModule];

			if( is_a( $objController, Application::class ) ) {
				$objController->initialize();
				$objController->execute();
				$objController->finalize();
			} else {
				throw  new \Exception( "It must implement Application interface" );
			}

			return;
		}

		throw  new \Exception( "Unable to load controller" );

	}

}
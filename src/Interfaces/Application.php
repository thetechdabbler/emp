<?php

namespace App\Interfaces;

interface Application {

	public function initialize();

	public function execute();

	public function finalize();
}
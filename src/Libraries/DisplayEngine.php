<?php

namespace App\Libraries;

class DisplayEngine {

	public static function render( string $strTemplate, array $arrTemplateVars = [], string $engine = 'Twig' ) {

		$objDisplayEngine = new self();

		return $objDisplayEngine->display( $strTemplate, $arrTemplateVars );
	}

	private function display( string $strTemplate, array $arrTemplateVars = [] ) {
		$loader = new \Twig\Loader\FilesystemLoader( $_ENV['VIEW_PATH'] );
		$twig   = new \Twig\Environment( $loader, [
			'cache' => $_ENV['CACHE_PATH'],
		] );

		return $twig->render( $strTemplate, $arrTemplateVars );
	}
}
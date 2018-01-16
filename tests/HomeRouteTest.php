<?php

use \HelloVideo\User as User;

class HomeRouteTest extends TestCase {

	private $base_url = 'http://newsite.dev/hellovideo/public/';

	/*
	|--------------------------------------------------------------------------
	| Home Page Routes
	|--------------------------------------------------------------------------
	*/
		/*
		|-----------------------------------------------------
		| Route: 	URL/
		|-----------------------------------------------------
		*/
			
			public function testHome()
			{

				URL::to('/');
				$response = $this->call('GET', $this->base_url);
				echo $response->getStatusCode();
				$this->assertEquals(200, $response->getStatusCode());
			}

}
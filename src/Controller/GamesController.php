<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class GamesController {

	public function getGames(): Response {
		$games = [1,2,3,4,5];
		return new Response(json_encode($games));
	}


	public function number(): Response {
		$number = random_int(0, 100);

		return new Response(
			'<html><body>Lucky number: ' . $number . '</body></html>'
		);
	}
}

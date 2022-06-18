<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class GamesController extends AbstractController {

	public function getGamesById(int $id): JsonResponse {
		return $this->json([$id]);
	}

	public function addGameById(int $id, Request $request): JsonResponse {



		$data = json_decode($request->getContent())->data;
		return $this->json([$id, $data]);
	}


	// public function number(): Response {
	// 	$number = random_int(0, 100);

	// 	return new Response(
	// 		'<html><body>Lucky number: ' . $number . '</body></html>'
	// 	);
	// }
}

<?php

namespace Tutorial\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class Framework
{

	public function getAll(Application $app)
	{
		$text = 'retrieve all items';
		$app['monolog']->addInfo($text);

		return new Response($text, 200);
	}

	public function getOneById(Application $app, $id)
	{
		$text = 'retrieve one item by ID: ' . $id;
		$app['monolog']->addInfo($text);

		return new Response($text, 200);
	}

	public function createOne(Application $app, Request $request)
	{
		$text = 'create one new item';
		$app['monolog']->addInfo($text);

		return new Response($text, 200);
	}

	public function updateOne(Application $app, Request $request)
	{
		$text = 'update exiting item by ID: ';
		$app['monolog']->addInfo($text);

		return new Response($text, 200);
	}

	public function deleteOne(Application $app, Request $request)
	{
		$text = 'delete existing item by ID';
		$app['monolog']->addInfo($text);

		return new Response($text, 200);
	}

}

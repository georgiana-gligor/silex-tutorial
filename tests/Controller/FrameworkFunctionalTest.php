<?php

namespace TutorialTest;

use TutorialTest\BasicTest;

class FrameworkFunctionalTest extends BasicTest
{

	public function testGetAll()
	{
		$client = $this->createClient();
		$client->request('GET', '/frameworks');

		$this->assertTrue($client->getResponse()->isOk());
	}

	public function testCreateOne()
	{
		$client = $this->createClient();
		$client->request('POST', '/frameworks');

		$this->assertTrue($client->getResponse()->isOk());

		$id = 1; // tODO return real ID created in this step

		return $id;
	}

	/**
	 * @depends testCreateOne
	 */
	public function testGetOne($id)
	{
		$client = $this->createClient();
		$client->request('GET', '/frameworks/' . $id);

		$this->assertTrue($client->getResponse()->isOk());
	}

	/**
	 * @depends testCreateOne
	 */
	public function testUpdateOne($id)
	{
		$client = $this->createClient();
		$client->request('PUT', '/frameworks/' . $id);

		$this->assertTrue($client->getResponse()->isOk());
	}

	/**
	 * @depends testCreateOne
	 */
	public function testDeleteOne($id)
	{
		$client = $this->createClient();
		$client->request('DELETE', '/frameworks/' . $id);

		$this->assertTrue($client->getResponse()->isOk());
	}

}

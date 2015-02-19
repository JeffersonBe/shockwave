<?php

class ExampleTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testBasicExample()
	{
		$crawler = $this->client->request('GET', '/');

		$this->assertTrue($this->client->getResponse()->isOk());
	}

	public function testAvailableNavigation()
	{
		$crawler = $this->client->request('GET', '/');

		$this->parse('body')->assertClassHasAttribute('navigation');
	}

}

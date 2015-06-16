<?php

App::uses('Controller', 'Controller');
App::uses('View', 'View');
App::uses('FaHelper', 'FontAwesome.View/Helper');

class FaHelperTest extends CakeTestCase {

	public function setUp() {
		parent::setUp();
		$Controller = new Controller();
		$View = new View($Controller);
		$this->Fa = new FaHelper($View);
	}

	public function testLink() {
		$result = $this->Fa->link('test', 'Proceed', array('controller' => 'foo', 'action' => 'bar'));
		$expected = '<a href="/foo/bar">Proceed <i class="fa fa-test"></i></a>';
		$this->assertEquals($expected, $result);

		// Test link text gets escaped correctly.
		$result = $this->Fa->link('test', '>', array('controller' => 'foo', 'action' => 'bar'));
		$expected = '<a href="/foo/bar">&gt; <i class="fa fa-test"></i></a>';
		$this->assertEquals($expected, $result);

		$result = $this->Fa->link('test', 'Proceed', array('controller' => 'foo', 'action' => 'bar'), array('before' => true));
		$expected = '<a href="/foo/bar"><i class="fa fa-test"></i> Proceed</a>';
		$this->assertEquals($expected, $result);

		$result = $this->Fa->link('test', null, array('controller' => 'foo', 'action' => 'bar'), array('before' => true));
		$expected = '<a href="/foo/bar"><i class="fa fa-test"></i></a>';
		$this->assertEquals($expected, $result);
	}

}
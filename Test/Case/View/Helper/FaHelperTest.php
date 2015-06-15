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
		$result = $this->Fa->link('angle-double-right', 'Proceed', array('controller' => 'foo', 'action' => 'bar'));
		$expected = '<a href="/foo/bar">Proceed <i class="fa fa-angle-double-right"></i></a>';
		$this->assertEquals($expected, $result);

		return;
	}

}
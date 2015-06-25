<?php

namespace FontAwesome\TestCase\View\Helper;

use Cake\TestSuite\TestCase;
use Cake\Network\Request;
use Cake\View\View;
use FontAwesome\View\Helper\FaHelper;

class FaHelperTest extends TestCase
{

    public function setUp()
    {
        parent::setUp();

        $View = new View(new Request());
        $this->Fa = new FaHelper($View);
    }

    public function testLink()
    {
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

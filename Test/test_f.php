<?php

class HelloWorldTest extends PHPUnit_Framework_TestCase
{
	public function test_it{
		$tst = new test();
		$this->assertEquals(5, $tst->test_fn(3,2));
	}
}
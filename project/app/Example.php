<?php

namespace App;

class Example
{
	protected $test;

	public function __construct(Test $test)
	{
		$this->test = $test;
	}
}

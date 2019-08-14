<?php

namespace App\Services;

class Twitter
{
	protected $api;

	public function __construct($api)
	{
		$this->api = $api;
	}
}
<?php

namespace Noobie;

use Noobie\Container;

class RouteMatcher
{
	protected $container;

	public function __construct(Container $app)
	{
		$this->app = $app;
	}

	public function getRouteFromRequest()
	{
		$request = $this->container->get('Request');
	}
}
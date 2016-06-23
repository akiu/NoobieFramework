<?php

namespace Noobie;

use Noobie\Container;
use Noobie\Request;

final class Application
{
	protected $container;
	protected $action;
	protected $request;

	public function __construct(Container $container)
	{
		$this->container = $container;
		$this->request = $container->get('Request');
	}

	public function run()
	{
		$routes = $this->container->getSingleton('ActionContainer');
		
		$action = call_user_func($routes['HomeAction']);
		
		call_user_func_array($action, ['1']);
	}
}
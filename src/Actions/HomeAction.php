<?php 

namespace Noobie\Actions;

use Noobie\Container;

class HomeAction
{
	protected $container;

	public function __construct(Container $container)
	{
		$this->container = $container;
	}

	public function __invoke($id)
	{
		$request = $this->container->get('Request');
		
		var_dump($id);
	}
}
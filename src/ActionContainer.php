<?php

namespace Noobie;

use Noobie\Container;
use Noobie\Actions\HomeAction;

class ActionContainer
{
	
	protected $container;

	public function __construct(Container $container)
	{
		$this->container = $container;
	}

	public function getActionsTable()
	{
		return [
			'HomeAction' => function() {
				return new HomeAction($this->container);
			}
		];
	}
}
<?php

namespace Noobie;

class Container
{
	protected $dependencies = [];
	protected $singletonContainer = [];

	public function register($name, \Closure $closure)
	{
		$this->dependencies[$name] = $closure;
	}

	public function singleton($name, \Closure $closure)
	{
		if(isset($this->singletonContainer[$name])) {
			return $this->singletonContainer[$name];
		}

		$this->singletonContainer[$name] = call_user_func($closure, $this);

		return $this->singletonContainer[$name];
	}

	public function get($name)
	{
		if(!$this->dependencies[$name]) {
			throw new \Exception("Instance of {$name} is unavaible, you forget to register it");
		}

		return $this->dependencies[$name]->__invoke($this);
	}

	public function getSingleton($name)
	{
		if(!$this->singletonContainer[$name]) {
			throw new \Exception("Instance of {$name} is unavaible, you forget to register it");
		}

		return $this->singletonContainer[$name];
	}
}
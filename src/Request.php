<?php

namespace Noobie;

final class Request
{
	protected $input;
	protected $query;
	protected $server;

	public function __construct($post, $get, $server)
	{
		$this->input = $post;
		$this->query = $get;
		$this->server = $server;
	}

	public function input($key)
	{
		$value = $this->input[$key] ? $this->input[$key] : null; 
		return $value;
	}

	public function query($key)
	{
		$value = $this->query[$key] ? $this->query[$key] : null; 
		return $value;
	}

	public function uri()
	{
		return $this->server['REQUEST_URI'];
	}

	public function method()
	{
		return $this->server['REQUEST_METHOD'];
	}
}
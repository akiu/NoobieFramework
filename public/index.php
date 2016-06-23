<?php

require "../vendor/autoload.php";

use Noobie\ActionContainer;
use Noobie\Application;
use Noobie\Container;
use Noobie\Request;

$container = new Noobie\Container();

$container->register('StringEngine', function($container) {
	return new StringTemplate\Engine();
});

$container->register('Request', function($container) {
	return new Request($_POST, $_GET, $_SERVER);
});

$container->singleton('ActionContainer', function($container) {
	return (new ActionContainer($container))->getActionsTable();
});

$application = $container->singleton('Application', function($container) {
	return new Application($container);
});

$application->run();

/*
$nama = $container->get('budiman');

$request = new Request();

$uri = explode('/', $request->uri());
$ura = explode('/', '/book/{id}');

$uriLength = count($uri);

for () {
	# code...
}

var_dump($uri);
//var_dump($uri);
//var_dump($nama);

*/
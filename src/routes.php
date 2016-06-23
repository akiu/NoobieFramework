<?php

return [

	'/' => [
		'method' => ['GET'], 
		'action' => 'HomeAction', 
		'middleware' => []
	],

	'/book' => [
		'method' => ['GET'], 
		'action' => 'BookIndexAction', 
		'middleware' => []
	],
	
	//@todo buat function untuk check key dari array route, misal seperti dibawah ini 

	'/book/{id}' => [
		'where' => ['id' => '/^\d+$/'], 
		'method' => ['GET'], 
		'action' => 'ShowBookByIdAction', 
		'middleware' => []
	]
]
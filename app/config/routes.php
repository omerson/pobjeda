<?php

$router = new Phalcon\Mvc\Router();

$router->add('/login', array(
	'controller' => 'users',
	'action' => 'login',
));

$router->add('/upload', array(
	'controller' => 'xml',
	'action' => 'upload',
));

return $router;
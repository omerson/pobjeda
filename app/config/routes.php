<?php

$router = new Phalcon\Mvc\Router();

$router->add('/login', array(
	'controller' => 'users',
	'action' => 'login',
));

$router->add('/index', array(
	'controller' => 'xml',
	'action' => 'index',
));

return $router;
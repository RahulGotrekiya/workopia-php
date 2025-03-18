<?php

$router->get('/', 'controllers/home.php');
$router->get('/listings', 'controllers/home.php');
$router->get('/listings/create', 'controllers/listings/create.php');

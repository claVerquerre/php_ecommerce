<?php

require 'vendor/autoload.php';

use App\Controller\Dashboard;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

$request = Request::createFromGlobals();
$path    = $request->getPathInfo();

if (in_array($path, array('', '/'))) {
    $response = new Response('Welcome to the homepage.');
} elseif ('/hello' === $path) {
    $response = new Response('hello, World!');
} else {
    $response = new Response('Page not found.', 404);
}

$response->send();

require __DIR__.'/../vendor/autoload.php';

use App;
?>
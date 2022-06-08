<?php

/**
 * Routing
 */
$router = new Core\Router();

// Add the routes
$router->respondWithController('GET', '/@[:name]', 'Me@blog');
$router->respondWithController('GET', '/me/', 'Me@index');
$router->respondWithController('GET', '/me', 'Me@index');
$router->respondWithController('GET', '/dex/', 'Dex@index');
$router->respondWithController('GET', '/dex', 'Dex@index');
$router->respondWithController('GET', '/nfts/', 'Nfts@index');
$router->respondWithController('GET', '/nfts', 'Nfts@index');
$router->respondWithController('GET', '/nfts/new/', 'Nfts@new');
$router->respondWithController('GET', '/nfts/new', 'Nfts@new');
$router->respondWithController('GET', '/nfts/new/set/', 'Nfts@newset');
$router->respondWithController('GET', '/nfts/new/set', 'Nfts@newset');
$router->respondWithController('GET', '/nfts/new/script/', 'Nfts@newscript');
$router->respondWithController('GET', '/nfts/new/script', 'Nfts@newscript');
$router->respondWithController('GET', '/nfts/new/proof/', 'Nfts@newproof');
$router->respondWithController('GET', '/nfts/new/proof', 'Nfts@newproof');
$router->respondWithController('GET', '/nfts/set/[:set]', 'Nfts@set');
$router->respondWithController('GET', '/nfts/set/', 'Nfts@set');
$router->respondWithController('GET', '/nfts/set', 'Nfts@set');
$router->respondWithController('GET', '/nfts/explore/', 'Nfts@explore');
$router->respondWithController('GET', '/nfts/explore', 'Nfts@explore');
$router->respondWithController('GET', '/docs', 'Docs@index');
$router->respondWithController('GET', '/docs/', 'Docs@index');
$router->respondWithController('GET', '/', 'Home@index');
$router->respondWithController('GET', '/about/', 'About@index');
$router->respondWithController('GET', '/about', 'About@index');

// Dispatch the router
$router->dispatch();
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
$router->respondWithController('GET', '/dex/dlux/', 'Dex@dlux');
$router->respondWithController('GET', '/dex/dlux', 'Dex@dlux');
$router->respondWithController('GET', '/dex/larynx/', 'Dex@larynx');
$router->respondWithController('GET', '/dex/larynx', 'Dex@larynx');
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
$router->respondWithController('GET', '/nfts/set', 'Nfts@set');
$router->respondWithController('GET', '/nfts/explore/', 'Nfts@explore');
$router->respondWithController('GET', '/nfts/explore', 'Nfts@explore');
$router->respondWithController('GET', '/dex/grid/', 'Dex@grid');
$router->respondWithController('GET', '/dex/grid', 'Dex@grid');
$router->respondWithController('GET', '/dex/old/', 'Dex@old');
$router->respondWithController('GET', '/dex/old', 'Dex@old');
$router->respondWithController('GET', '/docs', 'Docs@index');
$router->respondWithController('GET', '/docs/', 'Docs@index');
$router->respondWithController('GET', '/login/', 'Login@index');
$router->respondWithController('GET', '/login', 'Login@index');
$router->respondWithController('GET', '/dlux/', 'Dlux@index');
$router->respondWithController('GET', '/api/', 'Api@index');
$router->respondWithController('GET', '/dlux/@[:name]/[:permlink]', 'Dlux@index');
$router->respondWithController('GET', '/@[:name]/[:permlink]', 'Dlux@index');
$router->respondWithController('GET', '/dluxar/@[:name]/[:permlink]', 'Dlux@ar');
$router->respondWithController('GET', '/qr', 'Qr@index');
$router->respondWithController('GET', '/', 'Home@index');
$router->respondWithController('GET', '/about/', 'About@index');
$router->respondWithController('GET', '/about', 'About@index');
$router->respondWithController('GET', '/honeycomb/', 'Honeycomb@index');
$router->respondWithController('GET', '/honeycomb', 'Honeycomb@index');

// Dispatch the router
$router->dispatch();
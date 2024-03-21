<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

service('auth')->routes($routes);

$routes->group('dashboard', ['namespace' => 'App\Controllers\Dashboard'], function ($routes) {
    $routes->get('usuario', 'Usuario::index');
    $routes->get('usuario/(:num)', 'Usuario::show/$1', ['as'=> 'usuario.show']);
    $routes->post('usuario/permisos_manejar/(:num)', 'Usuario::permisos_manejar/$1', ['as'=> 'usuario.permisos_manejar']);
    $routes->post('usuario/grupos_manejar/(:num)', 'Usuario::grupos_manejar/$1', ['as'=> 'usuario.grupos_manejar']);

});

$routes->presenter('regular');
$routes->presenter('admin');
$routes->presenter('other');

//  /* bNsz2JsH!GMF8LA*/
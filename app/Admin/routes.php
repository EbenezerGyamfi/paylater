<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('properties', PropertyController::class);
$router->resource('property-types', PropertyTypeController::class);
$router->resource('appointments', AppointmentController::class);

    $router->resource('categories', CategoryController::class);

});

<?php

/** @var Laravel\Lumen\Routing\Router $router */
$router->get('/', function () use ($router) {
    return 'Projeto Desenvolvido Por: Rodrigo Ruy Oliveira - rro.oliveira@gmail.com';
});

/** @var Laravel\Lumen\Routing\Router $router */
$router->group(['prefix' => 'api'], function () use ($router) {
    $router->group(['prefix' => 'clientes'], function () use ($router) {
        $router->get('', 'ClientesController@index');
        $router->post('', 'ClientesController@store');
        $router->get('{id}', 'ClientesController@show');
        $router->put('{id}', 'ClientesController@update');
        $router->delete('{id}', 'ClientesController@delete');

        $router->group(['prefix' => '{clienteId}/planos'], function () use ($router) {
            $router->get('', 'ClientesPlanosController@show');
        });
        $router->post('planos', 'ClientesPlanosController@store');
    });
});

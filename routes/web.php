<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('nacionalidades/',  ['uses' => 'NacionalidadeController@showAllNacionalidades']);
    $router->get('nacionalidades/{id}',  ['uses' => 'NacionalidadeController@showOneNacionalidade']);
    //Generos
    $router->group(['prefix' => 'generos'], function () use ($router) {
        $router->get('/',  ['uses' => 'GeneroController@showAllGeneros']);
    
        $router->get('/{id}', ['uses' => 'GeneroController@showOneGenero']);
    
        $router->post('/', ['uses' => 'GeneroController@create']);
    
        $router->delete('/{id}', ['uses' => 'GeneroController@delete']);
    
        $router->put('/{id}', ['uses' => 'GeneroController@update']);
    });
    //Editoras
    $router->group(['prefix' => 'editoras'], function () use ($router) {
        $router->get('/',  ['uses' => 'EditoraController@showAllEditoras']);
    
        $router->get('/{id}', ['uses' => 'EditoraController@showOneEditora']);
    
        $router->post('/', ['uses' => 'EditoraController@create']);
    
        $router->delete('/{id}', ['uses' => 'EditoraController@delete']);
    
        $router->put('/{id}', ['uses' => 'EditoraController@update']);
    });
    //Autores
    $router->group(['prefix' => 'autores'], function () use ($router) {
        $router->get('/',  ['uses' => 'AutorController@showAllAutores']);
    
        $router->get('/{id}', ['uses' => 'AutorController@showOneAutor']);
    
        $router->post('/', ['uses' => 'AutorController@create']);
    
        $router->delete('/{id}', ['uses' => 'AutorController@delete']);
    
        $router->put('/{id}', ['uses' => 'AutorController@update']);
    });
    //Livros
    $router->group(['prefix' => 'livros'], function () use ($router) {
        $router->get('/count',  ['uses' => 'LivroController@countLivroByOneFilter']);

        $router->get('/',  ['uses' => 'LivroController@showAllLivros']);
    
        $router->get('/{id}', ['uses' => 'LivroController@showOneLivro']);
    
        $router->post('/', ['uses' => 'LivroController@create']);
    
        $router->delete('/{id}', ['uses' => 'LivroController@delete']);
    
        $router->put('/{id}', ['uses' => 'LivroController@update']);
    });
  });

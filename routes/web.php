<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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
  //return $router->app->version();
  return [
    'php' => phpversion(),
    'version' => $router->app->version(),
    'server' => request()->server(),
    'user' => Auth::user(),
    'cache' => Cache::remember('foo', 10, fn() => mt_rand(100,999)),
    'config' => [
      'app' => config('app'),
      'database' => config('database'),
      'validation' => config('validation'),
      'exceptions' => config('exceptions'),
    ]
  ];
});

$router->controller('/res', 'ResController', [
  'regexAlias' => [
    'uid' => '[0-9a-zA-Z@-_]{4,16}',
  ]
]);

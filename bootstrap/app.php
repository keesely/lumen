<?php
/*
|--------------------------------------------------------------------------
| Register Middleware
|--------------------------------------------------------------------------
|
| Next, we will register the middleware with the application. These can
| be global middleware that run before and after each request into a
| route or middleware that'll be assigned to some specific routes.
|
 */

defined('BASE_PATH') || define('BASE_PATH', realpath(dirname(__DIR__)));
defined('VENDOR_PATH') || define('VENDOR_PATH', BASE_PATH . '/vendor/');
require_once VENDOR_PATH . '/autoload.php';

/*
|--------------------------------------------------------------------------
| Create The Application
|--------------------------------------------------------------------------
|
| Here we will load the environment and create the application instance
| that serves as the central piece of this framework. We'll use this
| application as an "IoC" container and router for this framework.
|
 */
/**
 * public Bootstrap (AppPath, envPath) initialize
 * */
$app = new Laravel\Lumen\Bootstrap(BASE_PATH, dirname(__DIR__));

return $app
  ->with('eloquent', 'auth')
  ->singletons([
    [ // 初始化异常处理
      Illuminate\Contracts\Debug\ExceptionHandler::class,
      App\Exceptions\Handler::class
    ],
    [ // 初始化命令行核心
      Illuminate\Contracts\Console\Kernel::class,
      App\Console\Kernel::class
    ]
  ])
  // 初始化日志模块
  // ->configureMonologUsing(function ($monolog) {                                  
  //   $handler = new \Package\LumenExtra\Handler\MongoHandler('mongodb', 'api-logs');
  //   $monolog->pushHandler($handler);
  //   return $monolog;
  // })
  ->tap(function ($app) {
    return $app->router->group([
      'namespace' => 'App\Http\Controllers',
      'routes' => 'routes/web.php',
    ]);
  });
  //->run();

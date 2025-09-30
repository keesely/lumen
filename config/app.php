<?php

return [
  'name'     => env('APP_NAME', 'Lumen'),
  'env'      => env('APP_ENV', 'developer'),
  'debug'    => env('APP_DEBUG', true),
  'server_ip'=> env('APP_SERVER_IP', null),
  'timezone' => 'PRC',
  'log_trace'=> env('APP_LOG_TRACE', 'simple'),
  // 32位密钥-部署是该值不能为空
  'key'             => env('APP_KEY', ''),
  'cipher'          => 'AES-256-CBC',                                  // 辅助加密算法(encrypt)
  'url'             => env('APP_URL', 'http://localhost'),             // 默认主机名
  'namespace'       => env('APP_NAMESPACE', 'App\\Http\\Controllers'), // 设置路由基础命名空间
  'locale'          => env('APP_LOCALE', 'zh'),                        // 本地化配置
  'fallback_locale' => env('APP_FALLBACK_LOCALE', 'en'),               // 辅助本地化语言 (当locale 中翻译文件不足以支撑翻译时调用该值设定的翻译文件)
  // 加载配置文件
  'configure' => [
    'validator', // 验证规则配置
    'exceptions', // 异常配置
  ],
  // 服务注册 (在bootstrap 中调用初始化注册)
  'providers' => [
    App\Providers\AppServiceProvider::class,   // 注册自定义扩展服务
    App\Providers\AuthServiceProvider::class,  // 注册权限认证
    App\Providers\EventServiceProvider::class, // 注册事件服务
  ],
  'middleware' => [
  ],
  'routeMiddleware' => [
    'auth' => App\Http\Middleware\Authenticate::class,
    //'csrf' => App\Http\Middleware\VerifyCsrfToken::class,
  ],
  // 门面(别名)注册 (在bootstrap 中调用初始化注册)
  'aliases' => [
    'Model'   => Illuminate\Database\Eloquent\Model::class,
    'Request' => Illuminate\Http\Request::class,
    'Config'  => Illuminate\Support\Facades\Config::class,
    'Storage' => Illuminate\Support\Facades\Storage::class,
    'Arr'     => Illuminate\Support\Arr::class,
    'Str'     => Illuminate\Support\Str::class,
    'Auth'    => Illuminate\Support\Facades\Auth::class,
    //'View'    => Illuminate\Support\Facades\View::class,
  ],

  // blade 配置
  'blade' => [
    // ['html', 'blade'],
    // ['js', 'blade'],
    // ['css', 'blade'],
  ],
  'modules' => [
    // 'web'    => app_path('Http/Web'),      // web
    //'admin'  => app_path('Http/Admin'),    // 管理后台
    //'api'    => app_path('Http/Api'),      // API管理
  ],
  'routes' => [
    'jsonOption' => JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES,
    'regexAlias' => [
      'appid' => '[0-9a-zA-Z@-_]{16}',
      'hash'  => '[0-9a-fA-F]{32}',
      'code'  => '[A-Z]+[0-9]{6,}',
    ]
  ]
];

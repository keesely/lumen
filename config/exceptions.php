<?php

return [
  //'default' => App\Exceptions\AppException::class,
  'alias' => [
    'ERR'      => Throwable::class,
    //'APPERR'   => App\Exceptions\AppException::class,
    //'NOREPORT' => App\Exceptions\NoReport::class,
    'AUTHERR'  => Illuminate\Auth\Access\AuthorizationException::class,
    'VALIDERR' => Illuminate\Validation\ValidationException::class,
    'MODELERR' => Illuminate\Database\Eloquent\ModelNotFoundException::class,
    'HTTPERR'  => Symfony\Component\HttpKernel\Exception\HttpException::class,
    //'CMDERR'   => App\Exceptions\ConsoleHandler::class,
    //'JOBERR'   => App\Exceptions\JobException::class,
  ],
];

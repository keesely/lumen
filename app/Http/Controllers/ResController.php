<?php

namespace App\Http\Controllers;
use App\Http\Req;
use App\Models\User;

class ResController extends Controller {

  public function index() {
    return [
      'res' => 'get:/ -> index'
    ];
  }

  public function show($id) {
    return [
      'res' => 'get:/ -> show',
      'id' => $id
    ];
  }

  public function create() {
    return [
      'res' => 'post:/ -> store'
    ];
  }

  public function update($id) {
  
  }

  public function patch($id) {
    
  }

  public function destroy($id) {
    
  }

  protected function getFirst() {
    return [false];
  }

  public function AnyBy(uuid $id, int $id2, User $user, Req $request, array $options = []) {
    
  }

  public function GetByMessage($id) {
    return [
      'controller' => static::class,
      'action' => __FUNCTION__,
      'id' => $id
    ];
  }

  public function GetMsgBy(string $id) {
    return [
      'controller' => static::class,
      'action' => __FUNCTION__,
      'id' => $id,
    ];
  }

  public function getIsBy(float $path) {
    return [
      'controller' => static::class,
      'action' => __FUNCTION__,
      'id' => strval($path),
      'routes' => app('router')->getRoutes(),
    ];
  }

}

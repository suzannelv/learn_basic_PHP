<?php
class Animal {
  public $age=12;
  public $color='white';

  public function running() {
    var_dump('running');
    // 查看当前实例化对象
    var_dump($this->age);
    return $this->color;
  }
  public function sleep() {
    var_dump('dodo');
  }
}

// 实例化对象
$obj = new Animal();
var_dump($obj);
$r = $obj->running();
var_dump($r);
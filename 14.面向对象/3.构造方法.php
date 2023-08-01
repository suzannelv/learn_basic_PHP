<?php
class Person {
  public $name='';
  public $age = 1;
  public $sex = '';
#构造方法
public function __construct($val1,$val2 = 'valeur par défaut') {
  var_dump('construct方法');
  #初始化成员属性
  $this->name = "kobe";
  $this->height = 1.2;
  var_dump($val1, $val2);
  // 给成员属性初始化随机值
#var_dump(mt_rand(0, 1));
$this->sex=mt_rand(0, 1) ? 'homme':'femme';
  
}


}

$h= new Person('aaa');
var_dump($h);

// $obj = new Person;
// var_dump($obj);
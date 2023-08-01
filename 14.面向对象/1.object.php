<?php
class demo {}
// 声明一个常量
define('study','php');
$val2 = 'abc';
class Person {
// - 成员属性/成员变量
  public $age = 18;
  public $sexe = 'femme';
  public $arr = [1, 2, 3];
  #public $info = new demo();
  #public $file = fopen('aa.txt', 'w');
  public $val = study ;
  #public $val2;
  public $val3= 1+1;
// - 成员方法/成员函数
public function eat() {
  var_dump('eat');
}

}
$obj = new Person();
var_dump($obj);
$obj = new Person;
var_dump($obj);
// 在外部通过对象访问成员属性
$res = $obj->age;
var_dump($res);
// 修改：对象→成员属性 = 值；
$obj->sexe='homme';
var_dump($obj->sexe);
// 添加不存在的成员属性
$obj->name = 'Lucile';
$obj->names = 'Lili';

// 删除成员属性
unset($obj->name);
var_dump($obj);
echo '<hr/>';
$obj = new Person;
var_dump($obj);

// 在外部通过对象访问成员方法
$obj->eat();
<?php
class Person {
  protected $name = 'kobe';
  public $sex = 'garçon';
  private $age = 19;
  public function play() {
    echo 'play basketball';
   #内部测试是否可以访问私有成员
   echo $this->age;
  }
  public function __get($pro) {
    var_dump($pro);
    echo $this->$pro;
  }

}

$obj = new Person();
var_dump($obj);
#var_dump($obj->play());
$obj->name;

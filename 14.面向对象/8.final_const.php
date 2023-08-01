<?php
$PI = 3.14;
var_dump($PI);

class Person {
  const NAME = 'Kobe';
  public $age = 12; 
  public $height= 1.99;
  final public function foo() {
    echo 'coding';
    #访问常量
    var_dump(Person::NAME);
    var_dump(self::NAME);
    var_dump($this);

  }

}

// class stu extends Person{

// }

#$obj=new Stu();
#var_dump($obj);
#$obj->foo();
#var_dump(Person::NAME);
$p=new Person();
$p->foo();

<?php
class Person {
  public $name='';
  public $age = 1;
  public $sex = '';
#析构方法
public function __destruct() {
  var_dump('destruct méthode');
}


}

$h= new Person();
var_dump($h);
echo '<hr/>';

$obj=new Person;
var_dump($obj);
#unset
unset($obj);
echo '<hr/>';

$obj1=new Person;
var_dump($obj1);
echo '<hr/>';



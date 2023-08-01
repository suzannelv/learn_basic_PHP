<?php
class Person {
  public $name="kobé";
  public $age=19;
  public $height = 1.88;
  public function running() {
    echo "running function";
  }
  public function dodo($duree) {
    echo 'faire dodo'.$duree;
  }
}
// hériter Person
class Student extends Person{
  #声明一个与父类同名的成员属性
  #public $name = "coder";
  #重写父类中的成员方法
  public function running() {
    echo 'student run';
  }
  public function coding() {
    echo 'coding php';
  }
  public function dodo($time){
    echo 'stu fait dodo' . $time . 'heures';
    

  }
  #子类中访问父类中的属性和方法
  public function visite_parent(){
    #this 表示访问的是当前对象
    var_dump($this->name);
    var_dump($this->height);
  }
}

$p= new Person();
var_dump($p);

$stu= new Student();
var_dump($stu);
var_dump($stu->age);
$stu->running();
$stu->coding();
$stu->dodo(2);
$stu->visite_parent();

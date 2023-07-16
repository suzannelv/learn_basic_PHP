<?php
$n1 = 0;
var_dump($n1);
$n1 = -10;
var_dump($n1);
$demo = 0b11;
var_dump($demo);

$str = <<< EOF
使用定界符方式
声明字符串
EOF;
var_dump($str);
$str = <<<EOF
使用定界符方式
声明字符串
$demo kkls
EOF;
var_dump($str);

$demoBL = true;
var_dump($demoBL);

// array
$arr = array(12, 23, 34);
var_dump($arr);
$arr = array(300 => 123, 200 => "human", 10 => "booster", "developpeur");
var_dump($arr);

// object
class Person{

  public $name = 'MJ';
  public $age = 18;
  
  }
  
  $obj = new Person();
  var_dump($obj);
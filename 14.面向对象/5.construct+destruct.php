<?php
class Foo {
  public $name;
  // construct
  public function __construct($name) {
    $this->name = $name;
    var_dump($this->name."被构造");
  }
  // destruct
  public function __destruct() {
    var_dump($this->name.'被析构');
  }
}

$aa = new Foo("a");
$bb = new Foo("b");
$cc = new Foo("c");


<?php
$demo = 123;  //interger
$demo = 1.2;  //double
$r = gettype($demo);
var_dump($r);

$demo1 = 1.23;
$r = is_int($demo1);
$r = is_integer($demo1);
var_dump($r);
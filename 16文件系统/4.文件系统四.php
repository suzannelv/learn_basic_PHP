<?php
#$r = file('demo.txt');
#var_dump($r);
#readfile('demo.txt');

// $r返回值是一个字节
$r = readfile('demo.txt');
var_dump($r);


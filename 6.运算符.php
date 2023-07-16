<?php
$a = 10;
$b = 9;
$c = 8;
$d = 7;
$e = 6;

$c = ++ $a + $b ++;
$d = $a -- +$c -$b;
$e = $c ++ -$d-- + $b;
var_dump($a, $b, $c, $d, $e);

// .=
$str = 'aa';
$str .= 'bb'; // $str = $str . 'bb'
var_dump($str);

// < = > : 组合比较符
var_dump(1<=>1);
var_dump('a'<=>'a');
var_dump(2<=>1);
var_dump(1<=>3);
var_dump('a'<=>'b');
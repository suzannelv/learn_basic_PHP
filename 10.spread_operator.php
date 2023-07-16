<?php
// 
function demo($a, $b) {
  var_dump($a, $b);
}

$arr = [1, 3];
demo(...$arr);


// 格式二：形参使用延展操作符
function demo1($a, $b, ...$arr1) {
  var_dump($a,$b, $arr1);
}

demo1(1, 'aa', true, [2, 3]);

// 呼叫函数
function demo2($n1, $n2) {
  return $n1+$n2;
}
$r = call_user_func('demo2', 2, 3);
var_dump($r);
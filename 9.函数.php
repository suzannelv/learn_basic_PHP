<?php

//  自定义函数 
function textarea($rows, $cols, $content = ''){
  $str = '<textarea rows="'. $rows .'" cols ="'. $cols .'" >';
    $str .= $content;
  $str .='</textarea>';
  echo $str;
}
textarea(10, 40, 'function php');

// 函数调用
function demo($num) {
  if(!function_exists('test')){
    function test($n1, $n2) {
      return $n1+$n2;
    }
  }
  return $num + test(1, 2);
}

$r = demo(10);
var_dump(10);

$r = demo(20);
var_dump($r);

#测试function_exists
var_dump(function_exists('demo'));


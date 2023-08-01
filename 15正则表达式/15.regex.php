<?php
#$str = 'ab*c\'d';
#$str = '<br/>';
$str = $_POST['user'];
#自定义一个正则表达式
#$pattern = '/\*c\'/';
#$pattern="/<br\/>/";
$pattern='/\d/';

#通过函数进行正则匹配
$r = preg_match($pattern, $str, $match);
if($r) {
  var_dump($match);
} else {
  echo 'échec match';
}
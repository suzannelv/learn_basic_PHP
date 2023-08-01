<?php
// 打开资源
$file = fopen('./demo.txt','r');
var_dump($file);
// 操作资源
# 1. 从资源中读取文件中的内容
#$content = fread($file,1);
#var_dump($content);
# 2. 从资源中循环读取文件中的内容
$str = "";
while (!feof($file)) {
  $content = fread($file, 1);
  $str .=$content;
}
var_dump($str);
// 关闭资源
fclose($file);
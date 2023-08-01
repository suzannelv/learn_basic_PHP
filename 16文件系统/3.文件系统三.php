<?php
// 打开一个文件 r:只读 
$file = fopen('demo.txt', 'r');
// 循环读取
while($row = fgets($file)) {
    echo $row;
}


// 读取
/*$content = fgets($file);
var_dump($content);
$content = fgets($file);
var_dump($content);
$content = fgets($file);
var_dump($content);*/
// 关闭资源
fclose($file);
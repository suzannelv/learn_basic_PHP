<?php
// 复制指定文件
// $r = copy('./demo.txt', './demo1.txt');
// var_dump($r);

// 修改文件名称
// $r = rename("demo1.txt", "rename.txt");

// 删除文件
$r = unlink('rename.txt');
var_dump($r);


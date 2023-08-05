<?php
// 删除目录
// rmdir('file/mk');

// 修改目录
// rename('file/mkdir', './file/mk');
// 创建一个目录
// $r = mkdir('./file/mkdir', 0777);
// $r = mkdir(date('Y-m-d'), 0777, true);
// var_dump($r);


// 1. 打开指定目录
$dir = opendir('./file');
var_dump($dir);


// 2. 读取文件中的内容
// echo readdir($dir) . "<br/>";
// echo readdir($dir) . "<br/>";
// echo readdir($dir) . "<br/>";
// echo readdir($dir) . "<br/>";
// echo readdir($dir) . "<br/>";

// 循环读取文件中的内容
while($name = readdir($dir)) {
    echo $name . "<br/>";
}

// 3. 关闭目录
closedir($dir);

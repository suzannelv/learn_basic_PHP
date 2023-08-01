<?php
$url = 'https://www.baidu.com/image/logo.png?username=php&passwprd=123';
#获取文件的后缀
$info = parse_url($url);
var_dump($info);
// 查找.最后一次出现的位置





#var_dump(basename($url));
#var_dump(dirname($url));



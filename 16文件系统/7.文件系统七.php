<?php
$url = 'https://www.baidu.com/image/logo.png?username=php&passwprd=123';
#获取文件的后缀
#$info = parse_url($url);
#var_dump($info);
#$r = explode('.', $info['path'] );
#var_dump($r);

// 查找.最后一次出现的位置

$one = strrpos($url, '.')+1;
#var_dump($one);

// 问号最后出现的位置
// $two = strrpos($url, '?');
// var_dump($one);
// $len=$two-$one;
// var_dump($len);
// echo substr($url, $one, $len);

var_dump(pathinfo($url));

#var_dump(basename($url));
#var_dump(dirname($url));



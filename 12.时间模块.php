<?php
// zone time
#date_default_timezone_set('PRC');
date_default_timezone_set('Etc/GMT-8');

var_dump(date_default_timezone_get());

// 获取时间戳
$time = time();
var_dump($time);
// utiliser date()
$r = date('Y-m-d H:i:s', $time);
var_dump($r);



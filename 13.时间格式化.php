<?php

// format 1
$date=date('Y年m月d日 H时i分s秒');
var_dump($date);

// format 2
$date=date('Y年m月d日 H时i分s秒', 9983920);
var_dump($date);

// 时间相关函数
var_dump(getDate());
$time=mktime(5, 30, 12, 2, 10, 2014);
var_dump($time);
var_dump(date('s:i:H d-m-Y ', $time));

var_dump(microtime());
var_dump(microtime(true));

// strtotime() : 获取指定的时间的时间戳
// $time1 = strtotime('2023-7-16 17:40:30');
// 明天现在的时间
$time1 = strtotime('+1 day');
$time1 = strtotime('-1 week');
$time1 = strtotime('newt Thursday');

var_dump(date('Y/m/d H:i:s', $time1));
#获取一分钟后的时间
var_dump(date('Y-m-d H:i:s', time()+60));

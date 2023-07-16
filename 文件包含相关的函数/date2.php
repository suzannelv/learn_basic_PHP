<?php
// 导入test.php，
include 'test.php';
require_once 'test.php';
require_once 'test.php';
// 导入date.php，使本页面也使用巴黎时区时间
// include 'date.php';
var_dump(date('s:i:H d-m-Y'));


test();
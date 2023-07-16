<?php
// 查看提交上来的内容

// var_dump($_POST);
$no1 = $_POST['no1'];
$no2 = $_POST['no2'];
$operator = $_POST['operator'];

switch ($operator) {
  case 'add':
    echo $no1 + $no2;
    break;
  case 'sub':
    echo $no1 - $no2;
    break;
  case "multiple":
    echo $no1 * $no2;
    break;
  case "divise":
    echo $no1 / $no2;
    break;
}
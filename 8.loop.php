<?php
// for($n = 0; $n<100; $n++) {
//   echo $n . '<hr/>';
// }

// 9x9
echo '<table border="1" width="400px">';
// row
  for($tr=1; $tr<10; $tr++){
    echo '<tr>';

    // 循环输出每行的格子
    for($td=1; $td<$tr; $td++){
      echo '<td>' . $td . '*' .  $tr . '=' . $td*$tr . '</td>';
    }

    echo '</tr>';

  }

  echo '</table>';



  $no = 1;
  // 虽然初始化和递增表达式为空，但是分号必须存在以确保循环结构的正确性。
  for(; $no<=10;) {
    echo $no .'<br/>';
    $no++;
  }

// ------------
// for($count = 1, $i = 100, ²$j = 3; ($count <=10 and $i>=98); $count++, $i--) {
//   echo $count . '==>' . $i . '<br/>';
// };

// while 循环十行十列
$count = 1;
echo '<table border="1px" width="400px"';
// 使用while循环输出十行
  $tr = 1;
  while($tr <=10) {
    // 隔行变色
    if($tr % 2 == 0) {
       echo '<tr bgcolor="red">';
    } else {
      echo '<tr bgcolor="green">';
    }

    // 使用while循环输出十col
      $td = 1;
      while ($td <=10) {
        echo '<td>' . $count .'</td>';
        $td ++;
        $count++;
      }
    echo '</tr>';
    $tr ++;
  }

  echo '</table>';

  // do...while
  $n2 = 1; 
  do{
    echo $n2 . '<hr/>';
    $n2++;
  }while($n2 <=10);

  // forEach()
  $arr = [1, 2, 3, 4, 'php', 'js', 'angular'];
  foreach ($arr as $value) {
    // 打印的是元素的值
    var_dump($value);
  }

  $arr1 = ['id' => 12, 'name' => 'kobe', 'age' => 18, 'adress' => 'Paris'];
  foreach($arr1 as $key => $value) {
   echo $key . '==>'. $value . '<br />';
  }



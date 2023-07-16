<?php
function demo (float $val1, $val2) {
  var_dump($val1, $val2);
}
demo(false, 3);

function demo1 (array $val1, bool $val2) {
  var_dump($val1, $val2);
}
demo1([1, 2, 3], 3);

// callable
function demo2 (callable $val1, bool $val2) {
  call_user_func($val1, 123);
  var_dump($val1, $val2);
}

function a($no1) {
  echo $no1;
}
demo2('a', 3);
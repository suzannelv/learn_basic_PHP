<?php
$file = fopen('demo.txt', 'r');
echo '当前指针位置:'.ftell($file).'<br/>';
fread($file, 2);
var_dump(fread($file,3));
echo '当前指针位置:'.ftell($file).'<br/>';
fclose($file);



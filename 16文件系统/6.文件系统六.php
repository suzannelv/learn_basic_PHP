<?php
$file = fopen('demo.txt', 'r');
fseek($file, 4, SEEK_CUR);
echo ftell($file);
fseek($file, -2, SEEK_CUR);
echo ftell($file);
var_dump(fread($file,1));

fclose($file);



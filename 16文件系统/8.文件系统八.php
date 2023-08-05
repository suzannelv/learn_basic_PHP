<?php
// 自定义一个获取文件大小并且能够换算的函数
function getFileSize ($url) {
    // 获取文件的大小
    $size = filesize($url);
    if($size>pow(1024, 3)){
        // 换算为G
     $mysize = round($size/pow(1024, 3), 2).'G';
     
    } elseif($size>pow(1024, 2)){
        // 换算为M
     $mysize = round($size/pow(1024, 2), 2).'M';
     
    } elseif($size >1024){
        // 换算为k
        $mysize = round($size /1024,2).'k';
    }else{
        $mysize = $size.'bytes';
    }
    var_dump($mysize);
}
getFileSize('demo.txt');
// 获取文件的大小
#$size = filesize('demo.txt');
#var_dump($size);



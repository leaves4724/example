<?php
$fp=fopen("d:/PhpstormProjects/data/log.txt","r");
$arrSum=[];
$arrNum=[];
while(feof($fp)!=true){
    $row=trim(fgets($fp));
    $arr=explode(" ",$row);
    if(!isset($arrSum[$arr[1]])) {
        $arrSum[$arr[1]] = 0;
    }
    $arrSum[$arr[1]] += $arr[2];

    $arrNum[$arr[1]]++;
}
foreach ($arrSum as $k=>$v) {
    echo $k .":".($v/$arrNum[$k])."\n";
}

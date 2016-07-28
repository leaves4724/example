<?php
header("Content-Type:text/html;charset=utf-8");
$url = "http://fanyi.baidu.com/v2transapi?".http_build_query(array("query"=>$_GET["query"]));
$result = file_get_contents($url);
$arr = json_decode($result, true);
print_r($arr[trans_result][data][0][dst]);


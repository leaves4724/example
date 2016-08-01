<?php
$selected = array();
$sum=0;
$dishs = array(
	array("exit"),
	array("name"=>"kung-pao chicken","price"=>25),
	array("name"=>"sweet and sour pork ribs","price"=>30),
	array("name"=>"mapo beancurd","price"=>28),
	array("name"=>"fish-flavored pork","price"=>26),
);
while(true){
	// print dishs
	showDishes();
	// select dishs
	if (!selectDishes()) break;
}
printSelected();

function showDishes(){
	global $dishs;
	foreach($dishs as $k => $v){
		if ($k == 0) continue;
		print(($k).".".$dishs[$k]["name"]."\n");
	}
}

function selectDishes(){
	global $sum,$dishs;
	echo "Please input the No. or 0 to exit: ";
	$order=trim(fgets(STDIN));
	if($order==0) return false;
	$selected[] = $order;
	$sum+=$dishs[$order]["price"];
	return true;
}
function printSelected(){
	global $dishs,$sum,$selected;
	foreach($selected as $v) {
		echo $dishs[$v]["name"]."\n";
	}
	print("sum:".$sum);
}


<?php



$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$operation = $_POST['operation'];

if($operation == 'add'){
	echo $result = round($n1+$n2);
}elseif ($operation == 'sub') {
	echo $result = round($n1-$n2);
}elseif ($operation == 'mul') {
	echo $result = round($n1*$n2);
}elseif ($operation == 'div') {
	echo $result = round(($n1/$n2), 2);	
}else{

	echo "Error";
}



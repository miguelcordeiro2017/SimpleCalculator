<?php

$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$oper = $_POST["oper"];

function somar() {
	$somar = $num1+$num2;
	echo $somar;
}

function subtrair() {
	$subtrair = $num1-$num2;
	echo $subtrair;
}

function multiplicar() {
	$multiplicar = $num1*$num2;
	echo $multiplicar;
}

function dividir() {
	$dividir = $num1/$num2;
	echo $dividir;
}

switch ($oper) {
	case 'somar':
		somar();
		break;
	case 'subtrair':
		subtrair();
		break;
	case 'multiplicar':
		multiplicar();
		break;
	case 'dividir':
		dividir();
		break;		
}

?>

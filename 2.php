<?php

$phi = (1+sqrt(5))/2;
echo $phi . "<br />";

function fib ($counter) {

	$phi = (1+sqrt(5))/2;
	$fib = (pow($phi,$counter)-pow(-$phi,-$counter))/sqrt(5);
	return $fib;

}

$i=1;
$sum=0;
while ($sum<4000000) {
	$sum += fib($i*3);
	echo $i*3 . ": " . fib($i*3) . ": " . $sum . "<br />";
	$i++;
}

?>
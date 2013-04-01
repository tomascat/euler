<?php

function largestprimefactor ($number,$counter,$primes) {
	while ($counter<sqrt($number)) {
		if ($number%$counter==0) {
			array_push($primes,$counter);
			echo $counter . " " . $number/$counter . "<br />";
			largestprimefactor ($number/$counter,$counter,$primes);
		}
		$counter++;
	}
	return $primes;
}

$number = 600851475143;
$counter = 2;
$primes = array();

$largest = max(largestprimefactor ($number,$counter,$primes));
$largestone = $number/$largest;

echo  $largestone;

?>
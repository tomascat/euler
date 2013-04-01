<?php

function createPrimes ($subject)
{
	$primes = array();
	$nonprimes = array();
	$i=2;
	while ($i<$subject) {
		if (!in_array($i,$nonprimes)) {
			array_push($primes,$i);
			$j=2;
			while ((($j*$i)<$subject) && ($i<sqrt($subject))) {
				array_push($nonprimes,$i*$j);
				$j++;
			}
		}
	$i++;
	}
	return $primes;
}

?>
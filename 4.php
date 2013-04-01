<?php

function pals($highest) {
	for ($i=0;$i<($highest-1);$i++) {
		$counter = 0;
		while ($counter<($i-$counter))
		{
			$number = ($highest-$counter)*($highest-$i+$counter);
			$stringnumber = "$number";
			if ($stringnumber == strrev($stringnumber)) {
				return $number;
			}
			$counter++;
		}
	}
}

echo pals(999);

?>
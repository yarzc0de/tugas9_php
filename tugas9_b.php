<?php
for($i=1; $i<=200; $i++) {
	$a = 0;
	for($f=1; $f<=$i; $f++) {
		if($i % $f == 0) {
			$a++;
		}
	}
	if($a == 2) {
		echo $i.",";
	}
}
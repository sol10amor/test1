<?php

function  kuku() {

	$size = 9;


	$firstLine ="   ";
	for ($i = 1; $i <= $size; $i++) {
		 $firstLine .= " ". $i . " ";
	}
	echo $firstLine . "\n";


	echo str_repeat("-", 3 * $size + 5) . "\n";

	//$CR はCalculation Resultの略
	for ($i = 1; $i <= $size; $i++) {
        $CR = " ". $i. "|";
        for ($j = 1; $j <= $size; $j++) {
            $CR .= addSpace($i * $j) . " ";
        }
        echo $CR . "\n";
    }




}
function addSpace($number) {
    return ($number < 10 ? " ": "") . $number;

}

kuku();
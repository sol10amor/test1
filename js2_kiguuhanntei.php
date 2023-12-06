<?php

$num = 4;

function judgmentNum($num) {
	if ($num % 2 == 0){
    	return "偶数デス。";
	}else{
    	return "奇数デス。";
	}
}

echo $judgement = judgmentNum($num);
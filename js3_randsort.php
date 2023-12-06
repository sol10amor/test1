<?php

$numbers = [];

/*
* $i = 0;
* while ($i < 10) {
*/
for($i = 0;$i < 10; $i++ ){    
    $numbers[$i] = mt_rand(1, 10);
//    $i++;
}

echo "ソート前： " . implode(", ", $numbers)."\n";
//rsortにすれば降順　ｒはたぶんリバース
sort($numbers);

echo "ソート後： " . implode(", ", $numbers)."\n";
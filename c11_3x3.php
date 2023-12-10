<?php

     define('SIZE', 3);

                $table = array();

 for ($i = 0; $i < SIZE; ++$i) {
    for ($j = 0; $j < SIZE; ++$j) {
                 echo ($table[$i][$j] = $i * SIZE + $j + 1). " ";
    }
    echo "\n";
}



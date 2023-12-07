<?php

function miltiply($num1, $num2) {
    return $num1 * $num2;
}

$num1;
$num2;

$num1 = readline("一つ目の数字を入力セヨ". "\n");
//echo "入力された文字:$num1". "\n";

$num2 = readline("二つ目の数字を入力セニョリータ". "\n");
//echo "入力された文字:$num2". "\n";

echo "かけたら→ ". $result = miltiply($num1, $num2);

/*
使った資料
    文字入力する関数
    https://laboratory.kazuuu.net/obtaining-input-from-the-console-using-phps-readline-function/
*/


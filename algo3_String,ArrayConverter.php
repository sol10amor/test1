<?php

//3 文字列を受け取り、文字の配列を返す（例："asdf"→['a', 's', 'd', 'f']）

echo "文字を入力せよ\n";
$str = trim(fgets(STDIN));

function converter($str)
{
    for($i = 0; $i < countLen($str); $i++) {
        $array[] = $str[$i];
    }
    return $array;
}

function countLen($str)
{
    $lenCounter = 0;
    while($str[$lenCounter] != null) {
        $lenCounter++;
    }
    return $lenCounter;
}

$convertToArray = converter($str);
echo "文字列は配列に変換されました\n";
var_dump($convertToArray);

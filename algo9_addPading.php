<?php

//9 文字列と文字と数値を受け取り（文字列Aと文字Xと数値N）、
//文字列の長さがNになるように文字列Aの左側に文字Xを追加する（例："ABC", '', 10→"**ABC"）

$str = "ABC";
$X = '*';
$N = 10;

function CountLen($str)
{
    $lenCounter = 0;
    while($str[$lenCounter] != null) {
        $lenCounter++;
    }
    return $lenCounter;
}

function addPading($str, $X, $N)
{
    $lenCount = CountLen($str);

    if ($lenCount < $N) {
        $pad = $N - $lenCount;
        for($i = 0; $i < $pad; $i++) {
            $padding .= $X;
        }
        $result = $padding . $str;
        return $result;

    } else {
        echo "Nの値よりstrが長い\n";
        return $str;
    }
}

$result = addPading($str, $X, $N);
echo $result;

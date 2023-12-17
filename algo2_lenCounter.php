<?php

//2 文字列を受け取り、文字列の長さを返す
//ヒント：文字列の末尾には「あの文字」がありますが、その文字はnullと等価です）

function countLen($str)
{
    $lenCounter = 0;
    while($str[$lenCounter] != null) {
        $lenCounter++;
    }
    return $lenCounter;
}



echo "文字を入力せよ\n";
$str = trim(fgets(STDIN));
$strlen = countLen($str);

echo "文字列の長さは: $strlen\n";

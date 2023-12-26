<?php

// 1. 文字列を受け取り、シャッフルした文字列を返す関数
function shuffleString($str)
{
    $lastIndex = strlen($str) - 1;
    for ($i = 0; $i < $lastIndex  ; $i++) {
        $str = swap($str, $i, mt_rand($i, $lastIndex));
    }
    return $str;
}

function swap($str, $i, $rndI)
{
    $temp = $str[$i];
    $str[$i] = $str[$rndI];
    $str[$rndI] = $temp;
    return $str;
}

echo "文字を入力せよ\n";
$str = trim(fgets(STDIN));

$shfStr = shuffleString($str);

echo "シャッフルされた文字列: $shfStr\n";

//日本語と全角文字は結果がPPPPになるのはなぜ

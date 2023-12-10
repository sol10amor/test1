<?php
// 1. 文字列を受け取り、シャッフルした文字列を返す関数

function shuffleString($str) 
{
    // 文字列を一文字ずつ分割して配列にする
    $arrayStr = str_split($str);
    
    $strlen = count($arrayStr);
    for ($i = $strlen - 1; $i > 0; $i--) 
    {
        $rndI = mt_rand(0, $i);

        // 配列要素をシャッフル
        $temp = $arrayStr[$i];
        $arrayStr[$i] = $arrayStr[$rndI];
        $arrayStr[$rndI] = $temp;
    }
    //配列を文字列に直す
    $shfStr = implode("", $arrayStr);
    return $shfStr; 
}

echo "文字を入力せよ\n";
$str = trim(fgets(STDIN));

$shfStr = shuffleString($str);

echo "シャッフルされた文字列: $shfStr\n";

//日本語と全角文字は結果がPPPPになるのはなぜ
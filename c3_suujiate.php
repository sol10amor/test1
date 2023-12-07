<?php

$ranmdomNunber = mt_rand(1, 10);

$answer = NULL;

$maxRightOfReply = 3;
$rightOfReply = 0;


echo "ランダムな数字があります。3回以内で当ててください。\n";

while(1) {
    $rightOfReply++;
    $answe = readline($rightOfReply."回目の回答：");

    if($ranmdomNunber == $answe) {
        echo "正解！";
        break;
    }else {
        echo "不正解。。。";

        if ($maxRightOfReply == $rightOfReply){
            echo "残念でした、、、こたえは". $ranmdomNunber. "です";
            break;
        }else {
            echo "もう一回遊べるドン". "\n";
        }
    }
}

//Uncaught Error アンカッｆｔ　エラー
//変数の初期化：https://www.javadrive.jp/php/var/index2.html
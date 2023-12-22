<?php

//8 文字列を2個受け取り（文字列Aと文字列B）, 文字列Aが文字列Bを含むかどうかを返す
//（例："test_code.php", "code"→true / "test_code.php", "code_"→false）

echo "文字列を入力してください\n";
$str = trim(fgets(STDIN));
var_dump($str);

echo "照合する文字列を入力してください\n";
$str2 = trim(fgets(STDIN));
var_dump($str2);

function CountLen(string $str2)
{
    $lenCounter = 0;
    while($str2[$lenCounter] != null) {
        $lenCounter++;
    }
    return $lenCounter;
}

function keywordSearch(string $str, string $str2)
{
    $judge = false;
    for($i = 0 ; $i < CountLen($str); $i++) {
        if($str[$i] == $str2[0]) {
            echo ($i + 1) . "文字目でキーワードの一文字目の一致を確認\n";
            for($in = 0; $in < CountLen($str2); $in++) {
                if($str[$i + $in] == $str2[$in]) {
                    echo ($in + 1) . "番目まで同じ\n";

                    if($in == CountLen($str2) - 1) {
                        echo "キーワードを発見しました。\n";
                        return  $judge = true;
                    }
                } else {
                    echo "完全一致ではありませんでした";
                    break;
                }
            }
        }

        if($i == CountLen($str) - 1) {
            echo "キーワードは含まれておりません";
            return $judge;
        }
    }
}
$Verification = keywordSearch($str, $str2);

<?php

//5 文字列と文字の配列を受け取り、文字列から文字の配列に含まれる文字を削除した文字列を返す
//  （例："OBHTQABQNIB SQHBOHBEBIQ", ['B', 'Q'] →"OHTANI SHOHEI"）

echo "文字列を入力してください\n";
$str = fgets(STDIN);
var_dump($str);

echo "消去する文字を入力してください\n";
$deleteWord = trim(fgets(STDIN));
var_dump($deleteWord);


function converter($deleteWord)
{
    $array = [];
    for($i = 0; $i < countLen($deleteWord); $i++) {
        $array[] = $deleteWord[$i];
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

$deleteWordConvertedToArray = converter($deleteWord);

echo "文字列は配列に変換されました\n";
var_dump($deleteWordConvertedToArray);



function deleteWord($str, $deleteWordConvertedToArray)
{
    $result = "";
    for($i = 0 ; $i < countLen($str) ; $i++) {
        $Found = false;
        foreach ($deleteWordConvertedToArray as $key) {
            if ($str[$i] == $key) {
                $Found = true;
                break;
            }
        }
        if (!$Found) {
            $result .= $str[$i];
        }
    }
    return $result;
}

$delResult = deleteWord($str, $deleteWordConvertedToArray);
var_dump($delResult);

<?php

//4 文字列と文字を受け取り、受け取った文字を区切りとして分割した文字列配列を返す
// （例："asweaasxdaewaszx", 'a'→["swe", "sxd", "ew", "szx"]）

echo "文字列を入力してください\n";
$str = trim(fgets(STDIN));
var_dump($str);

echo "分断するキーワード文字を入力してください\n";
$keyword = trim(fgetc(STDIN));


function stringSplitter($str, $keyword)
{
    $put = "";
    $array = array();
    for($i = 0; $i < countLen($str); $i++) {

        if($str[$i] == $keyword) {
            if($i == 0) {
                continue;
            }
            if($str[$i - 1] == $keyword) {
                continue;
            }
            $array[] = $put;
            $put = "";
            continue;
        }
        $put .= $str[$i];
    }
    $array[] = $put;
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

$result = stringSplitter($str, $keyword);
var_dump($result);

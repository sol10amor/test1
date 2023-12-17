<?php

//4 文字列と文字を受け取り、受け取った文字を区切りとして分割した文字列配列を返す
// （例："asweaasxdaewaszx", 'a'→["swe", "sxd", "ew", "szx"]）

echo "文字列を入力してください\n";
$str = trim(fgets(STDIN));
var_dump($str);

echo "分断するキーワード文字を入力してください\n";
$keyword = trim(fgetc(STDIN));
var_dump($keyword);

function stringSplitter($str, $keyword) {}

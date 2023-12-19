<?php

//文字列を2個受け取り（文字列Aと文字列B）, 文字列Aが文字列Bで始まるかどうかを返す
//（例："test_code.php", "test"→true / "test_code.php", "_test"→false）

echo "文字列を入力してください\n";
$str = fgets(STDIN);
var_dump($str);

echo "照合する文字列を入力してください\n";
$str2 = trim(fgets(STDIN));
var_dump($str2);


function CountLen($str2)
{
    $lenCounter = 0;
    while($str2[$lenCounter] != null) {
        $lenCounter++;
    }
    return $lenCounter;
}

function Verification($str, $str2)
{
    for($i = 0; $i < CountLen($str2) ; $i++) {
        if($str[$i] == $str2[$i]) {
            $countNam = $i + 1;
            echo "前から" . $countNam . "番目の文字まで一致\n";
            if($i == CountLen($str2) - 1) {
                echo "照合した文字はすべて含まれています\n";
                return $judgement = true;
            }
        } else {
            $countNam = $i + 1;
            echo $countNam . "番目で照合した文字と不一致でした\n";
            return $judgement = false;
        }

    }
}
$Verification = Verification($str, $str2);

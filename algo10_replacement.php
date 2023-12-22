<?php

//10 文字列を３個受け取り（文字列Aと文字列Bと文字列C）,
//文字列Aに含まれる文字列Bを文字列Cで置き換えた文字列を返す（例："ASDFSDCXWEQSD", "SD", "< >" → "A< >F< >CXWEQ< >"）


$strA = "ASDFSDCXWEQSD";
$strB = "SD";
$strC = "< >";

function CountLen($str)
{
    $lenCounter = 0;
    while($str[$lenCounter] != null) {
        $lenCounter++;
    }
    return $lenCounter;
}

function replacement($strA, $strB, $strC)
{
    $result = '';
    $lenA = CountLen($strA);
    $lenB = CountLen($strB);

    $i = 0;
    while($i < $lenA) {
        if($strA[$i] == $strB[0]) {
            $find = true;

            for($j = 1; $j < $lenB; $j++) {
                if($strA[$i + $j] !== $strB[$j]) {
                    $find = false;
                    break;
                }
            }

            if($find) {
                $result .= $strC;
                $i += $lenB;
                continue;
            }
        }

        $result .= $strA[$i];
        $i++;
    }

    return $result;
}

$result = replacement($strA, $strB, $strC);
echo $result;

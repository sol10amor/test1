<?php

//クラス編の練習

class MyClub
{
    //選手名　プロパティ（変数）
    private $name;
    //サラリ　プロパティ（変数）
    private int $wSalary;
    //総選手数のカウンター　staticはクラス本体が持てるプロパティ（変数）
    private static $count = 0;

    private static int $totslWSalary = 0;
    //定数　constで定義
    public const VERSION = 20231227;

    //コンストラクター　最初に起動するメゾット（関数）
    public function __construct($name, $wSalary)
    {
        $this->name = $name;
        $this->wSalary = $wSalary;
        self::$count++;
        self::$totslWSalary += $wSalary;

    }

    //メゾット（関数）
    public function showInfo()
    {
        printf('登録選手数: %d' . PHP_EOL, self::$count);
    }

    public function prayersinfo()
    {
        echo "Name:" . $this->name . "\n" . "Salary:" . $this->wSalary . "€\n\n";
    }

    public static function showtotslSalary()
    {
        echo "Totsl Salary:" . self::$totslWSalary . "€\n";
    }

}

//インスタンスを作ってる　
//定義の仕方　 new クラス名（プロパティに代入するもの）
$prayers[10] = new MyClub('James Rodriguez', 20000);
$prayers[9] = new MyClub('Barotelli', 20000);





echo "バージョン" . MyClub::VERSION . "\n";

//名前の表示をしてみる
//echo $prayers[10]->getName() . "\n";　成功


//prayersinfoを使って全員分見る
for($i = 9; $i < 11;$i++) {
    echo "Number:{$i}\n";
    $prayers[$i]->prayersinfo();

}


//staticを使い外からアクセス
/*
newしなくてもアクセスできる
注意１：変数と関数どちらにもstatic漬けないとうまくいかない
*/
MyClub::showtotslSalary() ;

<?php
$file = fopen("players.txt", "r");  
$lineLength = 100;  
$totalSalary = 0;  

if ($file == false) {
    echo "ファイルを開けませんでした。\n";
    exit(1); 
}

while (($line = fgets($file, $lineLength)) != false){

    //名前を出力するif文
    if(strstr($line, "Name") != false) {
        //strstr か　strpos　　　
		//strstr(ポインタのはいった変数, "キーワード"
        //キーワードのとこだけ表示したい
        echo $line;
	}


	//サラリーを出力するif文
	if(strstr($line, "Salary") != false) {
        $SalaryLine = explode(':', $line, 2)[1];
        //数字を数値に変える関数　＄格納する変数＝(型)trim(＄数字の入っている変数名)
        $salary = (int)trim($SalaryLine);
        echo "Salary: $salary \n\n";
        $totalSalary += $salary;
	}
}

fclose($file);

echo "Total Salary: $totalSalary";



//ファイル関数について: https://www.sejuku.net/blog/48326
//キーワードを抽出する関数１：https://www.php.net/manual/ja/function.strstr.php
//キーワードを抽出する関数２：https://www.php.net/manual/ja/function.strpos.php
//文字列の分割：https://www.youtube.com/watch?v=U5hc6CPPC8o

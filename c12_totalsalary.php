<?php
$file = fopen("players.txt", "r");  
$lineLength = 100;  
$totalSalary = 0;  

if ($file == NULL) {
    echo "ファイルを開けませんでした。\n";
    exit(1); 
}



fclose($file);

echo "Total Salary: $totalSalary\n";
?>
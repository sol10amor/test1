<?php

$dinner = [
	"ピザ",
	"マックのポテト",
	"スーパーカップのチョコクッキー",
	"パイナップル",
	"肉"
];

$i = mt_rand(0, 4);

echo "今日の夜ご飯は：".$dinner[$i];
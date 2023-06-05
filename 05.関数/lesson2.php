<?php
// 以下をそれぞれ表示してください。（すべて改行を行って出力すること)
// 現在時刻を自動的に取得するPHPの関数があるので調べて実装してみて下さい。
// 実行するとその都度現在の日本の日時に合わせて出力されるされるようになればOKです。
// 日時がおかしい場合、PHPのタイムゾーン設定を確認して下さい。


// ・現在日時（xxxx年xx月xx日（x曜日））
// ・現在日時から３日後（yyyy年mm月dd日 H時i分s秒）
// ・現在日時から１２時間前（yyyy年mm月dd日 H時i分s秒）
// ・2020年元旦から現在までの経過日数 (ddd日)

$today = date("Y-m-d");
$inThreeDays = date("Y-m-d H:i:s", strtotime("+3 day"));
$twelveHoursAgo = date("Y-m-d H:i:s", strtotime("-12 hour"));
$current = strtotime($today);
$target = strtotime('2020-01-01');

echo $today . "<br>";
echo $inThreeDays . "<br>";
echo $twelveHoursAgo. "<br>";
echo (($current - $target) / (60 * 60 * 24)) . "日" . "<br>";

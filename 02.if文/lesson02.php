﻿<?php
// 80点以上なら「優」
// 60点以上なら「良」
// 40点以上なら「可」
// それ以下なら「不可」
// という形で区別し、下記のフォーマットで出力するプログラムを作ってください。
// ○○点は「○」です。

// $score = 100;
// $score = 60;
// $score = 40;
$score = 30;
 //いくつかのケースで動作確認を行ってください。

if ($score >= 80) {
  echo $score . "点は" . "「優」です" . PHP_EOL;
} elseif ($score >= 60) {
  echo $score . "点は" . "「良」です" . PHP_EOL;
} elseif ($score >= 40) {
  echo $score . "点は" . "「可」です" . PHP_EOL;
} else {
  echo $score . "点は" . "「不可」です" . PHP_EOL;
}

﻿<?php
// 以下をfor文を使用して表示してください。
// ヒント: forの中でforを３回使用

// ********1
// *******121
// ******12321
// *****1234321
// ****123454321
// ***12345654321
// **1234567654321
// *123456787654321
// 12345678987654321

for ($i = 1; $i <= 9; $i++) {
  for ($j = 9; $j > $i; $j--) {
      echo "*";
  }

  $num = 1;
  for ($k = 1; $k <= $i; $k++) {
      echo $num;
      $num++;
  }

  $num -= 2;
  for ($l = 1; $l < $i; $l++) {
      echo $num;
      $num--;
  }

  echo PHP_EOL;
}

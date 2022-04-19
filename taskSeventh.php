<?php
$handle = fopen('php://stdin', 'r');
echo 'Enter three-digit z' . "\n";
$z = fgets($handle);

$digits = str_split($z);
$digits[1] = 0;
$res = implode('', $digits);
echo 'Дано трехзначное числа. Поменяйте среднюю цифру на ноль. ' .$res. "\n";
echo 'Найдите число, полученное выписыванием в обратном порядке цифр данного трехзначного натурального числа. ' . strrev($res);

<?php
$handle = fopen('php://stdin', 'r');
echo 'Enter x' . "\n";
$x = fgets($handle);
echo 'Enter y' . "\n";
$y = fgets($handle);
echo 'Enter three-digit z' . "\n";
$z = fgets($handle);

echo('Найдите сумму 40% от первого числа (x) и 84% от второго числа (y) = ' . $x * 0.4 + $y * 0.84 . "\n");

echo 'Дано трехзначное числа. Найдите сумму его цифр = ' . array_sum(str_split($z));

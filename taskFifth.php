<?php
$handle = fopen('php://stdin', 'r');
echo 'Enter x' . "\n";
$x = fgets($handle);

echo('$x%3 = ' . $x % 3 . "\n" . '$x%5 = ' . $x % 5 . "\n");
echo('$x * 30% = ' . $x + ($x * 0.3) . "\n" . '$x * 120% = ' . $x + ($x * 1.2) . "\n");

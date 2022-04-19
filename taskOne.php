<?php
$handle = fopen('php://stdin', 'r');
echo 'Enter x' . "\n";
$x = fgets($handle);
echo 'Enter y' . "\n";
$y = fgets($handle);

echo('x + y = ' . $x + $y . "\n" . 'x * y = ' . $x * $y);

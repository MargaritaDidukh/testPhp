<?php
$handle = fopen('php://stdin', 'r');
echo 'Enter x' . "\n";
$x = fgets($handle);
echo 'Enter y' . "\n";
$y = fgets($handle);
echo 'Enter z' . "\n";
$z = fgets($handle);

echo('(x+1)−2(z−2x+y) = ' . ($x + 1) - 2 * ($z - 2 * $x + $y));

<?php
$handle = fopen('php://stdin', 'r');
echo 'Enter x' . "\n";
$x = fgets($handle);
echo 'Enter y' . "\n";
$y = fgets($handle);
echo 'Enter z' . "\n";
$z = fgets($handle);

echo('(x + y + z)/3 = ' . ($x + $y + $z) / 3);

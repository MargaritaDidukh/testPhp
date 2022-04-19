<?php
$handle = fopen('php://stdin', 'r');
echo 'Enter x' . "\n";
$x = fgets($handle);
echo 'Enter y' . "\n";
$y = fgets($handle);


echo('x2 + y2 = ' . pow($x, 2) + pow($y, 2));

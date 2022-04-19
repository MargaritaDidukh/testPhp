<?php
$handle = fopen('php://stdin', 'r');
echo 'Enter x' . "\n";
$x = fgets($handle);
echo $x % 2 == 0 ? 'четное' : 'не четное';

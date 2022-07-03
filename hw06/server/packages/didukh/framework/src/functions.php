<?php
function dump($array)
{
    print("<pre>".print_r($array, true)."</pre>");
}
function dd($array)
{
    dump($array);
    die();
}
function df($string){
    $file = '/' . '/storage/logs/' . date('Y-m-d') . '.txt';
    $data = date('Y-m-d G:i:s');
    $fOpen = fopen($_SERVER['DOCUMENT_ROOT']  . $file, 'a+');
    $stringLog = $data . ' ' . print_r($string, true) . "\n";
    fwrite($fOpen, $stringLog);
    fclose($fOpen);
}
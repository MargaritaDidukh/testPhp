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
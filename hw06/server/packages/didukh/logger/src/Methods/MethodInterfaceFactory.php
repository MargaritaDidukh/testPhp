<?php


namespace didukh\Logger\Methods;

interface MethodInterfaceFactory
{
    public function writeLog($level, $message);
}
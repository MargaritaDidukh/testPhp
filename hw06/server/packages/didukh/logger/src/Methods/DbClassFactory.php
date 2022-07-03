<?php
namespace  didukh\Logger\Methods;

use didukh\Logger\Singleton;

class DbClassFactory extends  Singleton implements MethodInterfaceFactory
{
   protected $fileHandle;
   protected function __construct()
   {
      echo "Db";
   }

    public function writeLog($level, $message)
    {
//       $pdo->insert();
    }
}
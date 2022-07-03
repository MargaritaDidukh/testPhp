<?php
namespace  didukh\Logger\Methods;

use didukh\Logger\Singleton;

class TelegramClassFactory extends  Singleton implements MethodInterfaceFactory
{
//   protected $token = getenv('token');
   protected function __construct()
   {

      echo "Telegram";
   }

    public function writeLog($level, $message)
    {
        //       $connect = new Client('f');
//       $pdo->insert();
    }
}
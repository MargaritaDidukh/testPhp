<?php
namespace  didukh\Logger\Methods;

use didukh\Logger\Singleton;

class FileClassFactory extends  Singleton implements MethodInterfaceFactory
{
   protected $fileHandle;
   protected function __construct()
   {
       $file = '/' . '/storage/logs/' . date('Y-m-d') . '.txt';
       $this->fileHandle =   fopen($_SERVER['DOCUMENT_ROOT']  . $file, 'a+');
   }
//    protected function __destruct()
//   {
//       fclose($this->fileHandle);
//   }

    public function writeLog($level, $message)
    {
        $data = date('Y-m-d G:i:s');
        $stringLog =  $data . ' '  . $level . ' '.  print_r($message, true) . "\n";
//        $stringLog =  print_r($message, true);
        fwrite($this->fileHandle, $stringLog);
    }
}
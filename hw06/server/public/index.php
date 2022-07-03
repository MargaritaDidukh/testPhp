<?php

require_once "../vendor/autoload.php";
require_once  "../packages/didukh/framework/src/functions.php";

$query = trim($_SERVER['REQUEST_URI'],'/');

define('URL', trim($_SERVER['REQUEST_URI'], '/'));

define('SERVER', str_replace('public', '', dirname(__DIR__)));
define('ROOT', dirname(__DIR__));
use didukh\framework\Router;
use Symfony\Component\Dotenv\Dotenv;
$dotenv = new Dotenv();
$dotenv->load(SERVER . '/.env');
require_once "../routes/web.php";
Router::dispatch(URL);

class Mail{
    public function mail()
    {
        echo 'send';
    }
}
class UserManager
{
    public $mailer;
    public function __construct(Mail $mailer)
    {
        $this->mailer= $mailer;
    }

    public function create()
    {
        $this->mailer->mail();
    }
}

$app = new DI\Container();
$userManager = new UserManager(new Mail());
$userManager->create();
$app->get($userManager);

//dd($app);

//class Singleton
//{
//    private static $instance = [];
//
//    protected function __construct(){}
//    protected function __clone(){}
//    protected function __wakeup(){}
//
//    public static function getInstance()
//    {
//        $multiTon = static::class;
//        if(!static::$instance[$multiTon]){
//            static::$instance[$multiTon] = new static();
//        }
//        return static::$instance[$multiTon];
//    }
//}
//
//class logger extends Singleton
//{
//    private $fp;
//    protected function __construct()
//    {
//        $this->fp = fopen($_SERVER["DOCUMENT_ROOT"] . 'MyLog.txt' , 'a+');
//    }
//
//    public function writeLog($str)
//    {
//        $date = date("Y-m-d G:i:s");
//        $res = $date . " " . print_r($str,true). "\r\n";
//        fwrite( $this->fp, $res);
//    }
//
//    public static function log($str)
//    {
//        $log = static::getInstance();
//        $log->writeLog($str);
//    }
//
//}
////logger::getInstance();
//
//logger::log(123123);


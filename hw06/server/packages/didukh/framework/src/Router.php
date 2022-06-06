<?php

namespace didukh\framework;

class Router
{
    protected static $routes = [];
    protected static $route = [];

    public static function add($reg, $route = [])
    {
        self::$routes[$reg] = $route;



    }

    public static function dispatch($url)
    {
        $url = self::removeQueryString($url);
        if(self::matchRoute($url)){
            $controller = self::$route[0];
            if(class_exists($controller)){
                //echo 'good';
                $cObj = new $controller(self::$route);
                $action = self::$route[1];
                if(method_exists($cObj,$action)){
                    //echo 'Method exists';
                    $cObj->$action();
                }else{
                    echo 'Method <b>' . $controller. '=>'. $action . '</b> not exists';echo 'Method not exists';
                }
            }else{
                echo 'Controller <b>' . $controller . '</b> not exists';
            }

        }else{
            http_response_code(404);
            include "404.html";
        }

    }

    public static function matchRoute($url)
    {
        foreach (self::$routes as $pattern => $route) {
            if(preg_match("#$pattern#i",$url,$matches)){
                foreach ($matches as $index => $match){
                    if(is_string($index)){
                        $route[$index] = $match;
                    }
                }
                if(!$route[1]){
                    $route[1] = 'index';
                }
                self::$route = $route;
                return true;
            }
        }

        return false;
    }

    protected static function removeQueryString($url)
    {
        if ($url) {
            $params = explode('&', $url, 2);
            if (false == strpos($params[0], '=')) {
                return trim($params[0], '/');
            } else {
                return '';
            }
        }
    }
}
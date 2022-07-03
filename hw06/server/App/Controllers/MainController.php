<?php

namespace App\Controllers;

use didukh\Logger\Logger;

class MainController extends BaseController
{
    public function index()
    {
        Logger::log('log information');
        Logger::error('log error');
//        $mainModel = MainModel::getAll();
        echo __CLASS__ . ' ' . __METHOD__;
    }
}
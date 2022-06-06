<?php

namespace App\Controllers;



class MainController extends BaseController
{
    public function index()
    {
//        $mainModel = MainModel::getAll();
        echo __CLASS__ . ' ' . __METHOD__;
    }
}
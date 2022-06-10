<?php

namespace App\Controllers;


use didukh\framework\controllers\Controller;

class BaseController extends Controller
{
    public function redirect(string $url)
    {
        header('Location: ' . $url);
        exit;
    }
}
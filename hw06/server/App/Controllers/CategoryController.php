<?php

namespace App\Controllers;

use App\Models\CategoryModel;


class CategoryController extends BaseController
{
    public function index()
    {
        $categoryModel = new CategoryModel();
        $res = $categoryModel->findAll();

//        echo '<pre>';
//        print_r($res);
//        echo '</pre>';


//return $this->getView('category', $this->layout, $this->view);
        return $this->getView('category', 'category', 'index');
//        return __CLASS__ . ' ' .__METHOD__;
    }
}
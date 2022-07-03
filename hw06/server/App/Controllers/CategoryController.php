<?php

namespace App\Controllers;

use App\Models\CategoryModel;
use didukh\Logger\Logger;


class CategoryController extends BaseController
{
//    public function index()
//    {
//        $categoryModel = new CategoryModel();
//        $res = $categoryModel->findAll();
//        return $this->view('category', 'category', 'index');
//    }
    public function index()
    {

        Logger::error('Hi margo');
//        df('aaaaaa');
//        $categoryModel = new CategoryModel;
//
//        $res = $categoryModel->findAll();
//        return $this->view('category/index', ['res' => $res]);
//        return $this->view('category/index', ['id' => 33333333333]);
    }

    public function save()
    {
        try {
            $categoryModel = new CategoryModel;
            $categoryModel->insertOne(['title' => $_POST['title'], 'message' => $_POST['description']]);
            $this->redirect('http://localhost:8181/category');
        } catch (\Exception $exception) {
            return 'ERORR!!!!!';
        }
    }

    public function delete()
    {
        try {
            $delModel = new CategoryModel;
            if (isset($_POST['submit'])) {
                if (!empty($_POST['data'])) {
                    foreach ($_POST['data'] as $value) {
                        $delModel->deleteOne('id', $value);
                    }
                }
            }

            $this->redirect('http://localhost:8181/category');
        } catch (\Exception $exception) {
            return 'ERORR!!!!!';
        }
    }

//    public function store()
//    {
//        $m= new CategoryModel();
//        $m->save($_POST);
//    }


}

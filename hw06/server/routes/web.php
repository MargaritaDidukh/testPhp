<?php
use didukh\framework\Router;

Router::add('^$', [App\Controllers\MainController::class, 'index']);

Router::add('^category$', [App\Controllers\CategoryController::class, 'index']);

Router::add('article', [App\Controllers\ArticleController::class, 'index']);

Router::add('test', [didukh\framework\controllers\Controller::class, 'index']);
Router::add('^category/save$', [App\Controllers\CategoryController::class, 'save']);
Router::add('^category/delete$', [App\Controllers\CategoryController::class, 'delete']);
//
//Router::add('^$',[
//    'action' => 'index',
//    'controller' => 'App\Controllers\MainController'
//]);
//
//Router::add('^category$',[
//    'controller' => 'App\Controllers\CategoryController',
//    'action' => 'index']);
//
//Router::add('article',[
//    'App\Controllers\ArticleController',
//    'action' => 'index']);

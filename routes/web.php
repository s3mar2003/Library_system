<?php

use App\Controllers\BookController;
use App\Controllers\UserController;
use App\Core\Router;


$router=new Router();

$router->get('/Books-System/public/Books',[BookController::class,'index']);
$router->get('/Books-System/public/Books/create',[BookController::class,'create']);
$router->post('/Books-System/public/Books',[BookController::class,'store']);
$router->get('/Books-System/public/Books/edit/{id}', [BookController::class,'edit']);
$router->post('/Books-System/public/Books/update/{id}', [BookController::class,'update']);


$router->get('/Books-System/public/Books/delete/{id}', [BookController::class,'delete']);

// Users
$router->get('/Books-System/public/users',[UserController::class,'index']);
$router->get('/Books-System/public/users/create',[UserController::class,'create']);
$router->post('/Books-System/public/users',[UserController::class,'store']);
$router->get('/Books-System/public/users/edit/{id}',[UserController::class,'edit']);
$router->post('/Books-System/public/users/update/{id}', [UserController::class, 'update']);
$router->get('/Books-System/public/users/delete/{id}',[UserController::class,'delete']);
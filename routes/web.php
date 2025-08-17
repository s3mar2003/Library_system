<?php

use App\Controllers\BookController;
use App\Core\Router;


$router=new Router();

// $router->get('/Books-System/public/Books',[BookController::class,'index']);
$router->get('/Books-System/public/Books',[BookController::class,'index']);
// $router->get('/Books-System/public/Books/create',[BookController::class,'create']);
// $router->post('/Books-System/public/Books',[BookController::class,'store']);
// $router->get('//Books-System/public/Books/edit={id}',[BookController::class,'edit']);
// // $router->get('/Books-System/public/Books/{id}/edit',[BookController::class,'edit']);
// $router->post('/Books-System/public/Books/update',[BookController::class,'update']);
// // $router->post('/books/delete',[BookController::class,'delete']);

// Users
// $router->get('/users',[UserController::class,'index']);
// $router->get('/users/create',[UserController::class,'create']);
// $router->post('/users',[UserController::class,'store']);
// $router->get('/users/{id}/edit',[UserController::class,'edit']);
// $router->post('/users/update',[UserController::class,'update']);
// $router->post('/users/delete',[UserController::class,'delete']);
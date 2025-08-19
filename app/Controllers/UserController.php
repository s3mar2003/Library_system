<?php

namespace App\Controllers;

use App\Models\User;

class UserController{

    function index(){
        $user=new User();

        $users=$user->all();

       require __DIR__ . '/../views/users/index.php';

    }

  

    function create(){
        require __DIR__.'/../views/users/create.php';
    }

    function store(){
        $book = new User();
         if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['created_at']) ) {
        $book->create($_POST['name'], $_POST['email'], $_POST['password'],$_POST['created_at']);
        $this->index();}
        else{
        $this->create();
        }
    }

  

        function edit($id){
        $user = new User();
        $single = $user->find($id);
        require __DIR__.'/../views/users/edit.php';
        }



    function update(){
        $user = new User();
        $user->update($_POST['id'], $_POST['name'], $_POST['email'], $_POST['password'],$_POST['created_at']);
        header('Location: /Books-System/public/users');
    }

    function delete($id){
    $user = new User();
    $user->delete($id);
     header('Location: /Books-System/public/users');     }
}
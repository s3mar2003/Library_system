<?php

namespace App\Controllers;

use App\Models\Book;

class BookController{

    function index(){
        $book=new Book();

        $books=$book->all();

       require __DIR__ . '/../views/Books/index.php';

    }

  

    function create(){
        require __DIR__.'/../views/Books/create.php';
    }

    function store(){
        $book = new Book();
         if (!empty($_POST['title']) && !empty($_POST['author']) && !empty($_POST['copies_available']) && !empty($_POST['created_at']) ) {
        $book->create($_POST['title'], $_POST['author'], $_POST['copies_available'],$_POST['created_at']);
        $this->index();}
        else{
        $this->create();
        }
    }

  

        function edit($id){
        $book = new Book();
        $single = $book->find($id);
        require __DIR__.'/../views/Books/edit.php';
        }



    function update(){
        $book = new Book();
        $book->update($_POST['id'], $_POST['title'], $_POST['author'], $_POST['copies_available'],$_POST['created_at']);
        header('Location: /Books-System/public/Books'); 
    }

    function delete($id){
    $book = new Book();
    $book->delete($id);
header('Location: /Books-System/public/Books');     }
}
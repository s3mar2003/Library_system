<?php

namespace App\Controllers;

use App\Models\Book;

class BookController{

    function index(){
        $book=new Book();

        $books=$book->all();

       require __DIR__ .'/../views/books/index.php';

    }

  

    function create(){
        require __DIR__.'/../views/books/create.php';
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
        echo"12444";
        $single = $book->find($id);
        require __DIR__.'/../views/books/edit.php';
    }

    function update(){
        $book = new Book();
        $book->update($_POST['id'], $_POST['title'], $_POST['author'], $_POST['copies_available'],$_POST['created_at']);
        $this->index();
    }

    function delete(){
        $book = new Book();
        $book->delete($_POST['id']);
        $this->index();
    }
}
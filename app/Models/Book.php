<?php

namespace App\Models;

use App\Core\App;
use App\Traits\LoggingTrait; 
use App\Traits\SearchableTrait;
class Book{
 use LoggingTrait;
    function all(){
        
        $stm=App::db()->prepare("SELECT * FROM books");
        
        $stm->execute();
        
       return $stm->fetchAll();
    }


     public function find($id){
        $stmt = App::db()->prepare("SELECT * FROM books WHERE id=:id");
        $stmt->execute(['id'=>$id]);
        return $stmt->fetch();
    }

    public function create($title, $author, $copies, $created_at){
    $stmt = App::db()->prepare(
        "INSERT INTO books (title, author, copies_available, created_at) 
            VALUES (:title, :author, :copies_available, :created_at)"
    );

    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':author', $author);
    $stmt->bindParam(':copies_available', $copies);
    $stmt->bindParam(':created_at', $created_at);

    return $stmt->execute();
    $this->log("Book created: $title");
    }

public function update($id, $title, $author, $copies, $created_at){
    $stmt = App::db()->prepare(
        "UPDATE books 
         SET title = :title, 
             author = :author, 
             copies_available = :copies_available, 
             created_at = :created_at 
         WHERE id = :id"
    );

    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':author', $author);
    $stmt->bindParam(':copies_available', $copies);
    $stmt->bindParam(':created_at', $created_at);

    return $stmt->execute();
    $this->log("Book update: $title");
}

   
    

     public function delete($id){
        $stmt = App::db()->prepare("DELETE FROM books WHERE id=:id");
        $stmt->execute(['id'=>$id]);
        $this->log("Book deleted: $id"); 
    }

    // Example Transaction: Borrow Book
    public function borrow($book_id, $user_id){
        $pdo = App::db();
        try {
            $pdo->beginTransaction();
            $stmt1 = $pdo->prepare("INSERT INTO borrows(book_id,user_id,borrow_date) VALUES(:b,:u,NOW())");
            $stmt1->execute(['b'=>$book_id,'u'=>$user_id]);

            $stmt2 = $pdo->prepare("UPDATE books SET copies_available=copies_available-1 WHERE id=:id AND copies_available>0");
            $stmt2->execute(['id'=>$book_id]);

            $pdo->commit();
        } catch (\Exception $e){
            $pdo->rollBack();
            throw $e;
        }
    }

}
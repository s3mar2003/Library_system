<?php
namespace App\Models;

use App\Core\App;
use App\Traits\LoggingTrait; 
use App\Traits\SearchableTrait;
class User {
    use LoggingTrait;

    public function all(){
        $stmt = App::db()->prepare("SELECT * FROM users");
        $stmt->execute();
        return $stmt->fetchAll();
    }

         public function find($id){
        $stmt = App::db()->prepare("SELECT * FROM users WHERE id=:id");
        $stmt->execute(['id'=>$id]);
        return $stmt->fetch();
    }

     public function create($name, $email, $password, $created_at){
      $stmt = App::db()->prepare(
    "INSERT INTO users (name, email, password, created_at) 
     VALUES (:name, :email, :password, :created_at)"
);

    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':created_at', $created_at);

    return $stmt->execute();
    $this->log("user created: $name");
    }


 public function update($id, $name, $email, $password, $created_at){
    $stmt = App::db()->prepare(
        "UPDATE users 
         SET name = :name, 
             email = :email, 
             password = :password, 
             created_at = :created_at 
         WHERE id = :id"
    );

    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':created_at', $created_at);
    return $stmt->execute();
    $this->log("User updated: $name");
    
}

    public function delete($id){
        $stmt = App::db()->prepare("DELETE FROM users WHERE id=:id");
        $stmt->execute(['id'=>$id]);
        $this->log("User deleted: $id");
    }
}

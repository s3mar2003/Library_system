<?php
namespace App\Controllers;

use App\Models\User;

class UserController {

    public function index() {
        $user = new User();
        $users = $user->all();
        require __DIR__ . '/../views/users/index.php';
    }

    public function create() {
        require __DIR__ . '/../views/users/create.php';
    }

    public function store() {
        $user = new User();
        $user->create($_POST['name'], $_POST['email']);
        $this->index(); 
    }

    public function edit($id) {
        $user = new User();
        $single = $user->find($id); 
        require __DIR__ . '/../views/users/edit.php';
    }

    public function update() {
        $user = new User();
        $user->update($_POST['id'], $_POST['name'], $_POST['email']); 
        $this->index();
    }

    public function delete() {
        $user = new User();
        $user->delete($_POST['id']); 
        $this->index();
    }
}

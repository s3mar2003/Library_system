<?php
namespace App\Models;

use App\Core\App;
use App\Traits\LoggingTrait;

class Borrowing {
    use LoggingTrait;

    // عرض كل الاستعارات
    public function all() {
        $stmt = App::db()->prepare("SELECT * FROM borrowings");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    // البحث عن استعارة برقم ID
    public function find($id) {
        $stmt = App::db()->prepare("SELECT * FROM borrowings WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }

    // إنشاء استعارة جديدة
    public function create($user_id, $book_id, $borrow_date, $return_date) {
        $stmt = App::db()->prepare(
            "INSERT INTO borrowings (user_id, book_id, borrow_date, return_date) 
             VALUES (:user_id, :book_id, :borrow_date, :return_date)"
        );

        $stmt->bindParam(':user_id', $user_id);
        $stmt->bindParam(':book_id', $book_id);
        $stmt->bindParam(':borrow_date', $borrow_date);
        $stmt->bindParam(':return_date', $return_date);

        $result = $stmt->execute();
        if ($result) {
            $this->log("Borrowing created: User $user_id borrowed Book $book_id");
        }
        return $result;
    }

    // تحديث استعارة
    public function update($id, $user_id, $book_id, $borrow_date, $return_date) {
        $stmt = App::db()->prepare(
            "UPDATE borrowings 
             SET user_id = :user_id,
                 book_id = :book_id,
                 borrow_date = :borrow_date,
                 return_date = :return_date
             WHERE id = :id"
        );

        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':user_id', $user_id);
        $stmt->bindParam(':book_id', $book_id);
        $stmt->bindParam(':borrow_date', $borrow_date);
        $stmt->bindParam(':return_date', $return_date);

        $result = $stmt->execute();
        if ($result) {
            $this->log("Borrowing updated: ID $id");
        }
        return $result;
    }

    // حذف استعارة
    public function delete($id) {
        $stmt = App::db()->prepare("DELETE FROM borrowings WHERE id = :id");
        $result = $stmt->execute(['id' => $id]);

        if ($result) {
            $this->log("Borrowing deleted: $id");
        }
        return $result;
    }
}

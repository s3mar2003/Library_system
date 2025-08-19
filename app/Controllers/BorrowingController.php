<?php

namespace App\Controllers;

use App\Models\Borrowing;

class BorrowingController
{
    // عرض جميع الاستعارات
    public function index()
    {
        $borrowing = new Borrowing();
        $borrowings = $borrowing->all();
        require __DIR__ . '/../views/Borrowings/index.php';
    }

    // عرض فورم إضافة استعارة
    public function create()
    {
        require __DIR__ . '/../views/Borrowings/create.php';
    }

    // تخزين الاستعارة في قاعدة البيانات
    public function store() {
    if (!empty($_POST['user_id']) && !empty($_POST['book_id']) && !empty($_POST['borrow_date'])) {
        $borrowing = new Borrowing();
        $borrowing->create($_POST['user_id'], $_POST['book_id'], $_POST['borrow_date'], $_POST['return_date']);
        // **هنا Redirect لتجنب إعادة الإرسال عند تحديث الصفحة**
        header('Location: /Books-System/public/Borrowings');
        exit; // مهم جدًا بعد header
    } else {
        $this->create();
    }
}


    // عرض فورم تعديل استعارة
    public function edit($id)
    {
        $borrowing = new Borrowing();
        $single = $borrowing->find($id);
        require __DIR__ . '/../views/Borrowings/edit.php';
    }

    // تحديث بيانات الاستعارة
    public function update()
    {
        $borrowing = new Borrowing();
        $borrowing->update($_POST['id'], $_POST['user_id'], $_POST['book_id'], $_POST['borrow_date'], $_POST['return_date']);
        header('Location: /Books-System/public/Borrowings');
    }

    // حذف استعارة
    public function delete($id)
    {
        $borrowing = new Borrowing();
        $borrowing->delete($id);
        header('Location: /Books-System/public/Borrowings');
    }
}

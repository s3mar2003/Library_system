<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Borrowing</title>
</head>
<body>
    <h1>Edit Borrowing</h1>
    <form method="POST" action="/Books-System/public/Borrowings/update">
        <input type="hidden" name="id" value="<?= $single['id'] ?>">

        <label>User ID:</label>
        <input type="number" name="user_id" value="<?= $single['user_id'] ?>" required><br><br>

        <label>Book ID:</label>
        <input type="number" name="book_id" value="<?= $single['book_id'] ?>" required><br><br>

        <label>Borrow Date:</label>
        <input type="date" name="borrow_date" value="<?= $single['borrow_date'] ?>" required><br><br>

        <label>Return Date:</label>
        <input type="date" name="return_date" value="<?= $single['return_date'] ?>" required><br><br>

        <button type="submit">Update</button>
    </form>
    <br>
    <a href="/Books-System/public/Borrowings">Back</a>
</body>
</html>

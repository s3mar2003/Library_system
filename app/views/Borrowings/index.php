<!DOCTYPE html>
<html>
<head>
    <title>Borrowings</title>
</head>
<body>
    <h1>All Borrowings</h1>
    <a href="/Books-System/public/Borrowings/create">+ Add Borrowing</a>
    <table border="1" cellpadding="8">
        <tr>
            <th>ID</th>
            <th>User</th>
            <th>Book</th>
            <th>Borrow Date</th>
            <th>Return Date</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($borrowings as $b): ?>
        <tr>
            <td><?= $b['id'] ?></td>
            <td><?= $b['user_id'] ?></td>
            <td><?= $b['book_id'] ?></td>
            <td><?= $b['borrow_date'] ?></td>
            <td><?= $b['return_date'] ?></td>
            <td>
                <a href="/Books-System/public/Borrowings/<?= $b['id'] ?>/edit">Edit</a>
                <form method="POST" action="/Books-System/public/Borrowings/delete" style="display:inline;">
                    <input type="hidden" name="id" value="<?= $b['id'] ?>">
                    <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>

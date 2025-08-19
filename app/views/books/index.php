<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Books List</title>
</head>
<body>
    <h1>All Books</h1>
    <a href="Books/create">+ Add New Book</a>
    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>ID</th><th>Title</th><th>Author</th><th>copies</th><th>Year</th><th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($books as $book): ?>
                <tr>
                    <td><?= htmlspecialchars((string)$book['id']) ?></td>
                    <td><?= htmlspecialchars($book['title']) ?></td>
                    <td><?= htmlspecialchars($book['author']) ?></td>
                    <td><?= htmlspecialchars($book['copies_available']) ?></td>
                    <td><?= htmlspecialchars((string)$book['created_at']) ?></td>
                    <td>
                          <a href="/Books-System/public/Books/edit/<?= urlencode((string)$book['id']) ?>">Edit</a> |
                        <a href="delete.php?id=<?= urlencode((string)$book['id']) ?>"
                           onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>

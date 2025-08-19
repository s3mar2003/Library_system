<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Users List</title>
</head>
<body>
    <h1>All Users</h1>
    <a href="users/create">+ Add New User</a>
    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>ID</th><th>Name</th><th>Email</th><th>Password</th><th>Creste_at</th><th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= htmlspecialchars((string)$user['id']) ?></td>
                    <td><?= htmlspecialchars($user['name']) ?></td>
                    <td><?= htmlspecialchars($user['email']) ?></td>
                    <td><?= htmlspecialchars($user['password']) ?></td>
                    <td><?= htmlspecialchars($user['created_at']) ?></td>
                    <td>
                       <a href="users/edit/<?= urlencode((string)$user['id']) ?>">Edit</a> |
                        <a href="users/delete/<?= urlencode((string)$user['id']) ?>"
                           onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>

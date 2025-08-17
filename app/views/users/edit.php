<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>
    <h1>Edit User</h1>

    <?php if (!empty($single)): ?>
        <form method="POST" action="/users/update">
            <input type="hidden" name="id" value="<?= htmlspecialchars($single['id']) ?>">

            <label>Name: 
                <input type="text" name="name" value="<?= htmlspecialchars($single['name']) ?>" required>
            </label><br>

            <label>Email: 
                <input type="email" name="email" value="<?= htmlspecialchars($single['email']) ?>" required>
            </label><br>

            <button type="submit">Update</button>
        </form>
    <?php else: ?>
        <p>User not found.</p>
    <?php endif; ?>
</body>
</html>

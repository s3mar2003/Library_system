<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Edit User</title>
</head>
<body>
    <h1>Edit User</h1>
    <form method="POST" action="/Books-System/public/users/update/<?= htmlspecialchars($single['id']) ?>">
        <input type="hidden" name="id" value="<?= htmlspecialchars((string)$single['id']) ?>">
        
        <label>Name:</label>
        <input type="text" name="name" value="<?= htmlspecialchars($single['name']) ?>" required><br><br>
        
        <label>Email:</label>
        <input type="email" name="email" value="<?= htmlspecialchars($single['email']) ?>" required><br><br>
        
        <label>Password:</label>
        <input type="password" name="password" value="<?= htmlspecialchars($single['password']) ?>"><br><small>Leave blank if not changing</small><br><br>
        <label>Created At:</label>
        <input type="date" name="created_at" value="<?= htmlspecialchars($single['created_at']) ?>" required><br><br>
        
        <button type="submit">Update</button>
    </form>
</body>
</html>

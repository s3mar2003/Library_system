<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Add User</title>
</head>
<body>
    <h1>Add New User</h1>
    <form method="post" action="/Books-System/public/users">
        <label>Name:</label>
        <input type="text" name="name" required><br><br>
        
        <label>Email:</label>
        <input type="email" name="email" required><br><br>
        
        <label>Password:</label>
        <input type="password" name="password" required><br><br>
        <label>Year:</label>
        <input type="date" name="created_at" required><br><br>
        <button type="submit">Save</button>
    </form>
</body>
</html>

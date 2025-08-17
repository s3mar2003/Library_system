<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Add Book</title>
</head>
<body>
    <h1>Add New Book</h1>
    <form method="POST" action="/Books-System/public/Books">
        <label>Title:</label>
        <input type="text" name="title" required><br><br>
        
        <label>Author:</label>
        <input type="text" name="author" required><br><br>
        
        <label>Copies:</label>
        <input type="number" name="copies_available" required><br><br>

        <label>Year:</label>
        <input type="date" name="created_at" required><br><br>
        
        <button type="submit">Save</button>
    </form>
</body>
</html>

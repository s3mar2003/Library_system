<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Edit Book</title>
</head>
<body>
    <h1>Edit Book</h1>
    <form method="post" action="/Books-System/public/Books">
        <input type="hidden" name="id" value="<?= htmlspecialchars((string)$book['id']) ?>">
        
        <label>Title:</label>
        <input type="text" name="title" value="<?= htmlspecialchars($book['title']) ?>" required><br><br>
        
        <label>Author:</label>
        <input type="text" name="author" value="<?= htmlspecialchars($book['author']) ?>" required><br><br>
        
        <label>Year:</label>
        <input type="number" name="year" value="<?= htmlspecialchars((string)$book['copies_available']) ?>" required><br><br>

         <label>Copies:</label>
        <input type="date" name="year" value="<?= htmlspecialchars((string)$book['created_at']) ?>" required><br><br>
        
        <button type="submit">Update</button>
    </form>
</body>
</html>

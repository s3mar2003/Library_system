<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Edit Book</title>
</head>
<body>
    <h1>Edit Book</h1>

    <form method="POST" action="/Books-System/public/Books/update/<?= htmlspecialchars($single['id']) ?>">
        <input type="hidden" name="id" value="<?= htmlspecialchars($single['id']) ?>">
        
        <label>Title:</label>
        <input type="text" name="title" value="<?= htmlspecialchars($single['title'])  ?>" required><br><br>
        
        <label>Author:</label>
        <input type="text" name="author" value="<?= htmlspecialchars($single['author'])?>" required><br><br>
        
       <label>Copies:</label>
       <input type="number" name="copies_available" value="<?= htmlspecialchars($single['copies_available']) ?>" required><br><br>

        <label>Created At:</label>
        <input type="date" name="created_at" value="<?= htmlspecialchars($single['created_at']) ?>" required><br><br>
        
        <button type="submit">Update</button>
    </form>
</body>
</html>

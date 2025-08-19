<form method="POST" action="/Books-System/public/Borrowings/store">
    <label>User ID:</label>
    <input type="number" name="user_id" required><br>
    <label>Book ID:</label>
    <input type="number" name="book_id" required><br>
    <label>Borrow Date:</label>
    <input type="date" name="borrow_date" required><br>
    <label>Return Date:</label>
    <input type="date" name="return_date"><br>
    <button type="submit">Save</button>
</form>

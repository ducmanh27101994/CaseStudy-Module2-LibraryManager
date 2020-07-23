<form method="post">
    <input type="text" name="borrow_date" value="<?php echo $borrows['borrow_date'] ?>" readonly>
    <input type="text" name="return_date" value="<?php echo $borrows['return_date'] ?>" readonly>
    <select name="status">
        <option value="Borrow Books">Borrow Books</option>
        <option value="Give Book Back">Give Book Back</option>
    </select>
    <button type="submit">Submit</button>
    <button onclick="window.history.go(-1); return false;">Back</button>
</form>



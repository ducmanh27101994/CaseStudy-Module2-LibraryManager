
<h2>Borrowed Ticket Information</h2>
<a href="index.php?page=add-detail">Add Books</a>
<table>
    <tr>
        <th>Card Number</th>
        <td><?php echo $details[0]['id'] ?></td>
    </tr>
    <tr>
        <th>Student Name</th>
        <td><?php echo $details[0]['student_name'] ?></td>
    </tr>
    <tr>
        <th>Class</th>
        <td><?php echo $details[0]['class'] ?></td>
    </tr>
    <tr>
        <th>Phone</th>
        <td><?php echo $details[0]['phone'] ?></td>
    </tr>
    <tr>
        <th>Address</th>
        <td><?php echo $details[0]['address'] ?></td>
    </tr>
</table>
<h3>Borrowed Books</h3>
<table >
    <tr>
        <th>STT</th>
        <th>Book</th>
        <th>Author</th>
        <th>Category</th>
        <th>Status</th>
        <th>Borrow Date</th>
        <th>Return Date</th>
        <th>Action</th>
    </tr>
    <?php if (empty($details)): ?>
        <tr>
            <th>
                No Data
            </th>
        </tr>
    <?php else: ?>
        <?php foreach ($details as $key => $detail): ?>
            <tr>
                <td><?php echo ++$key ?></td>
                <td><?php echo $detail["book_name"] ?></td>
                <td><?php echo $detail["author"] ?></td>
                <td><?php echo $detail["category_name"] ?></td>
                <td><?php echo $detail["status"] ?></td>
                <td><?php echo $detail["borrow_date"] ?></td>
                <td><?php echo $detail["return_date"] ?></td>
                <td><a onclick="return confirm('Are you sure')" href="index.php?page=delete-detail&book_id=<?php echo $detail['book_id']?>&borrow_id=<?php echo $detail['borrow_id']?>">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
</table>
<button onclick="window.history.go(-1); return false;">Back</button>
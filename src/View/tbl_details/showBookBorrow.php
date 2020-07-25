<br><br><br>
<div class="container">
<h3>Borrow Books</h3>
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th>STT</th>
        <th>Card</th>
        <th>Student</th>
        <th>Class</th>
        <th>Phone</th>
        <th>Book</th>
        <th>Author</th>
        <th>Category</th>
        <th>Status</th>
        <th>Borrow Date</th>
        <th>Return Date</th>
    </tr>
    </thead>
    <tbody>
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
                <td>
                    <a href="index.php?page=detail-id&id=<?php echo $detail['id'];?>">
                        <?php echo "Card: ". $detail["id"] ?>
                    </a>
                </td>
                <td><?php echo $detail["student_name"] ?></td>
                <td><?php echo $detail["class"] ?></td>
                <td><?php echo $detail["phone"] ?></td>
                <td><?php echo $detail["book_name"] ?></td>
                <td><?php echo $detail["author"] ?></td>
                <td><?php echo $detail["category_name"] ?></td>
                <td><?php echo $detail["status"] ?></td>
                <td><?php echo $detail["borrow_date"] ?></td>
                <td><?php echo $detail["return_date"] ?></td>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
    </tbody>
</table>
    <br>
<button id="list-back" class="btn btn-secondary" onclick="window.history.go(-1); return false;">Back</button>
</div>

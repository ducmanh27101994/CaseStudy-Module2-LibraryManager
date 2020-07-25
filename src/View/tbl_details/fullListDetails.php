<!--<form method="post" action="index.php">-->
<!--    <select name="checkBorrow">-->
<!--        <option value="BOOK BORROWS">Borrow Books</option>-->
<!--        <option value="RETURN BOOKS BORROWS">Give Book Back</option>-->
<!--    </select>-->
<!--    <button type="submit">Submit</button>-->
<!--</form>-->

<div id="full" class="container-fluid">
    <br>
    <form method="post" action="index.php?page=searchId">
        <select class="custom-select custom-select-lg mb-3" name="checkBorrow">
            <option value="BOOK BORROWS">Borrow Books</option>
            <option value="RETURN BOOKS BORROWS">Give Book Back</option>
            <option value="test">Card Number</option>
        </select>

            <input id="search-full" aria-label="Search" class="form-control mr-sm-2" type="text" name="keyword"
                   placeholder="Search">

        <button id="sb-borrow" class="btn btn-secondary" type="submit">Submit</button>
</form>
</div>
<br>


<div class="container">
    <h3>Full Information Borrows Book</h3>

    <table class="table table-striped">
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
                        <a href="index.php?page=detail-id&id=<?php echo $detail['id']; ?>">
                            <?php echo "Card: " . $detail["id"] ?>
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

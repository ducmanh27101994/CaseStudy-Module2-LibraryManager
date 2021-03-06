<br><br>
<div id="idTable" class="container">
<h3>Borrowed Ticket Information</h3>
<!--<a href="index.php?page=add-detail">Add Books</a>-->
    <div class="col-12 col-md-6">
        <a  id="button-id" class="add-button" href="index.php?page=add-detail"><i class="fas fa-user-plus"></i> &nbsp;Add Book</a>
    </div>
<table id="table-id" class="table table-striped">
    <thead class="thead-dark">
    <tr>
        <th>Information</th>
        <th>Desc</th>
    </tr>
    </thead>
    <tbody>
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
    </tbody>
    <br>
</table>
</div>
<br>
<div class="container">
<h3>Borrowed Books</h3>
<table class="table table-striped">
    <thead class="thead-dark">
    <tr>
        <th>STT</th>
        <th>Book</th>
        <th>Author</th>
        <th>Category</th>
        <th>Status</th>
        <th>Borrow Date</th>
        <th>Return Date</th>
        <th colspan="2" class="action">Action</th>
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
                <td><?php echo $detail["book_name"] ?></td>
                <td><?php echo $detail["author"] ?></td>
                <td><?php echo $detail["category_name"] ?></td>
                <td><?php echo $detail["status"] ?></td>
                <td><?php echo $detail["borrow_date"] ?></td>
                <td><?php echo $detail["return_date"] ?></td>
                <td class="td-delete"><a class="delete-table" onclick="return confirm('Are you sure')"
                       href="index.php?page=delete-detail&book_id=<?php echo $detail['book_id'] ?>&borrow_id=<?php echo $detail['borrow_id'] ?>"><i class="fas fa-calendar-times"></i>&nbsp;  Delete</a></a>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
    </tbody>
</table>
<button id="list-back" class="btn btn-secondary" onclick="window.history.go(-1); return false;">Back</button>
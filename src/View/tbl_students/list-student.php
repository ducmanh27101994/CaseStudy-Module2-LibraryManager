<!--<form method="post" action="index.php?page=search-student">-->
<!--    <input type="text" name="keyword" placeholder="keyword" required/>-->
<!--    <button type="submit">Search</button>-->
<!--</form>-->
<!--<a href="index.php?page=add-student">Add Student</a>-->

<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-6">
            <a  class="add-button" href="index.php?page=add-student"><i class="fas fa-user-plus"></i> &nbsp;Add Student</a>
        </div>
        <div class="col-12 col-md-6">
            <form class="form-inline my-2 my-lg-0" method="post" action="index.php?page=search-student">
                <input aria-label="Search" class="form-control mr-sm-2" type="text" name="keyword"
                       placeholder="Search Student">
                <button id="search-category" class="btn btn-outline-secondary" type="submit">Search Student</button>
                <button class="btn btn-outline-secondary" onclick="window.history.go(-1); return false;">Back</button>
            </form>
        </div>
    </div>
    <br>
</div>
<br>


<div class="container">
    <h3>List Students</h3>
<table class="table table-striped">
    <thead class="thead-dark">
    <tr>
        <th>STT</th>
        <th>Name</th>
        <th>Class</th>
        <th>Phone</th>
        <th>Address</th>
        <th colspan="2" class="action">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php if (empty($students)) : ?>
        <tr>
            <td>No data</td>
        </tr>
    <?php else : ?>
        <?php foreach ($students as $key => $student) : ?>
            <tr>
                <td><?php echo ++$key ?></td>
                <td><?php echo $student->getName() ?></td>
                <td><?php echo $student->getClass() ?></td>
                <td><?php echo $student->getPhone() ?></td>
                <td><?php echo $student->getAddress() ?></td>
                <td class="td-update"><a class="update-table" href="index.php?page=update-student&id=<?php echo $student->getId() ?>"><i class="fas fa-user-edit"></i>&nbsp;Update</a></td>
                <td class="td-delete"><a class="delete-table" href="index.php?page=delete-student&id=<?php echo $student->getId() ?>"><i class="fas fa-calendar-times"></i>&nbsp;  Delete</a></td>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
    </tbody>
</table>
</div>
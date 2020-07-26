<!--<form method="post" action="index.php?page=search-book">-->
<!--    <input type="text" name="keyword" placeholder="keyword"/>-->
<!--    <button type="submit">Search</button>-->
<!--</form>-->
<!--<a href="index.php?page=add-book">Add Book</a>-->

<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-6">
            <a  class="add-button" href="index.php?page=add-book"><i class="fas fa-user-plus"></i> &nbsp;Add Book</a>
        </div>
        <div class="col-12 col-md-6">
            <form class="form-inline my-2 my-lg-0" method="post" action="index.php?page=search-book">
                <input aria-label="Search" class="form-control mr-sm-2" type="text" name="keyword"
                       placeholder="Search Book">
                <button id="search-category" class="btn btn-secondary" type="submit">Search Book</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Back</button>
            </form>
        </div>
    </div>
    <br>
</div>
<br>


<div class="container">
    <h3>List Books</h3>
<table class="table table-striped">
    <thead class="thead-dark">
    <tr>
        <th>STT</th>
        <th>Name book</th>
        <th>Author</th>
        <th>Status</th>
        <th>Image</th>
        <th colspan="2" class="action">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php if (empty($books)) : ?>
        <tr>
            <td>No data</td>
        </tr>
    <?php else : ?>
        <?php foreach ($books as $key => $book) : ?>
            <tr>
                <td><?php echo ++$key ?></td>
                <td><?php echo $book->getBookName() ?></td>
                <td><?php echo $book->getAuthor() ?></td>
                <td><?php echo $book->getStatus() ?></td>
                <td><img src="<?php echo $book->getImage() ?>" style="width: 55px; height: 65px"/></td>
                <td class="td-update"><a class="update-table" href="index.php?page=update-book&id=<?php echo $book->getId() ?>"><i class="fas fa-user-edit"></i>&nbsp;Update</a></td>
                <td class="td-delete"><a class="delete-table" href="index.php?page=delete-book&id=<?php echo $book->getId() ?>"><i class="fas fa-calendar-times"></i>&nbsp;  Delete</a></td>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
    </tbody>
</table>
</div>


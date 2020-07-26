<!--<div class="container-fluid">-->
<!--<form method="post" action="index.php?page=search-category">-->
<!--    <input type="text" name="keyword" placeholder="keyword" required/>-->
<!--    <button type="submit">Search</button>-->
<!--</form>-->
<!--<a href="index.php?page=add-category">Add category</a>-->
<!--</div>-->

<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-6">
            <a  class="add-button" href="index.php?page=add-category"><i class="fas fa-user-plus"></i> &nbsp;Add Category</a>
        </div>
        <div class="col-12 col-md-6">
            <form class="form-inline my-2 my-lg-0" method="post" action="index.php?page=search-category">
                <input aria-label="Search" class="form-control mr-sm-2" type="text" name="keyword"
                       placeholder="Search Category">
                <button id="search-category" class="btn btn-secondary" type="submit">Search Category</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Back</button>
            </form>
        </div>
    </div>
    <br>
</div>
<br>




<div class="container">
    <h3>List Category</h3>
<table class="table table-striped">
    <thead class="thead-dark">
    <tr>
        <th>STT</th>
        <th>Category Name</th>
        <th>Comment</th>
        <th colspan="2" class="action">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php if (empty($categorys)) : ?>
        <tr>
            <td>No data</td>
        </tr>
    <?php else : ?>
        <?php foreach ($categorys as $key => $category) : ?>
            <tr>
                <td><?php echo ++$key ?></td>
                <td><?php echo $category->getName() ?></td>
                <td><?php echo $category->getComment() ?></td>
                <td class="td-update"><a class="update-table" href="index.php?page=update-category&id=<?php echo $category->getId() ?>"><i class="fas fa-user-edit"></i>&nbsp;Update</a></td>
                <td class="td-delete"><a class="delete-table" onclick="return confirm('Are you sure')" href="index.php?page=delete-category&id=<?php echo $category->getId() ?>"><i class="fas fa-calendar-times"></i>&nbsp;  Delete</a></td>
            </tr>
        <?php endforeach; ?>
    <?php endif;?>
        </tbody>
</table>
</div>

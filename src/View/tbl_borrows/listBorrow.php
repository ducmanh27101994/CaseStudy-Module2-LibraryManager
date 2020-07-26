<!--<a href="index.php?page=add-borrow">Add Borrow</a>-->
<!---->
<!--<form method="post" action="index.php?page=search-borrow">-->
<!--    <input type="text" name="keyword-borrow" placeholder="Search Borrow">-->
<!--    <button type="submit" name="search-borrow">Search</button>-->
<!---->
<!--    <input type="date" name="return_date1">-->
<!--    <input type="date" name="return_date2">-->
<!--    <button type="submit" name="search-date">Search</button>-->
<!--    <button onclick="window.history.go(-1); return false;">Back</button>-->
<!--</form>-->


<div id="borrow-fluid" class="container-fluid">
    <br>
    <div class="row">
        <div class="col-12 col-md-6">
            <a class="add-button" href="index.php?page=add-borrow"><i class="fas fa-user-plus"></i> &nbsp;Add Borrow</a>
        </div>
        <div class="col-12 col-md-6">
            <form id="borrow" class="form-inline my-2 my-lg-0" method="post" action="index.php?page=search-borrow">
                <input id="search-borrow" class="form-control form-control" type="text" name="keyword-borrow" placeholder="Search Borrow" >
                <button id="btn-search" class="btn btn-secondary" type="submit" name="search-borrow">Search Borrow</button>
                <br>
                <br>
                <input class="form-control form-control" type="date" name="return_date1" >
                <input class="form-control form-control" type="date" name="return_date2" >
                <button id="btn-search" class="btn btn-secondary" type="submit" name="search-date">Search Date</button>
<!--                                <button class="btn btn-outline-secondary" onclick="window.history.go(-1); return false;">Back</button>-->
                <br>
            </form>
        </div>
    </div>
    <br>
</div>

<br>



<div class="container">
    <h3>List Borrows</h3>
<table class="table table-striped">
    <thead class="thead-dark">
    <tr>
        <th>STT</th>
        <th>Card Number</th>
        <th>Borrow Date</th>
        <th>Return Date</th>
        <th>Status</th>
        <th colspan="2" class="action">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php if(empty($borrows)):?>
    <tr>
        <td>No data</td>
    </tr>
    <?php else:?>
    <?php foreach ($borrows as $key =>$borrow):?>
    <tr>
        <td><?php echo ++$key ?></td>
        <td><?php echo "Card: ".$borrow->getId() ?></td>
        <td><?php echo $borrow->getBorrowDate() ?></td>
        <td><?php echo $borrow->getReturnDate() ?></td>
        <td><?php echo $borrow->getStatus() ?></td>
        <td class="td-update"><a class="update-table" href="index.php?page=update-borrow&id=<?php echo $borrow->getId() ?>"><i class="fas fa-user-edit"></i>&nbsp;Update</a></td>
        <td class="td-delete"><a class="delete-table" onclick="return confirm('Are you sure')" href="index.php?page=delete-borrow&id=<?php echo $borrow->getId() ?>"><i class="fas fa-calendar-times"></i>&nbsp;  Delete</a></td>
    </tr>
    <?php endforeach;?>
    <?php endif;?>
    </tbody>
</table>
</div>
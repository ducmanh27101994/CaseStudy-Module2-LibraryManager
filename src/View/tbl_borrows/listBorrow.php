<a href="index.php?page=add-borrow">Add Borrow</a>

<form method="post" action="index.php?page=search-borrow">
    <input type="text" name="keyword-borrow" placeholder="Search Borrow">

    <button type="submit">Search</button>
    <button onclick="window.history.go(-1); return false;">Back</button>
</form>



<table>
    <tr>
        <th>STT</th>
        <th>Card Number</th>
        <th>Borrow Date</th>
        <th>Return Date</th>
        <th>Status</th>
        <th>Action</th>
    </tr>
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
        <td><a href="index.php?page=update-borrow&id=<?php echo $borrow->getId() ?>">Update Status</a></td>
        <td><a href="index.php?page=delete-borrow&id=<?php echo $borrow->getId() ?>">Delete</a></td>
    </tr>
    <?php endforeach;?>
    <?php endif;?>
</table>
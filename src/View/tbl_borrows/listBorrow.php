<a href="index.php?page=add-borrow">Add Borrow</a>

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
        <td><?php echo $borrow->getId() ?></td>
        <td><?php echo $borrow->getBorrowDate() ?></td>
        <td><?php echo $borrow->getReturnDate() ?></td>
        <td><?php echo $borrow->getStatus() ?></td>
    </tr>
    <?php endforeach;?>
    <?php endif;?>
</table>
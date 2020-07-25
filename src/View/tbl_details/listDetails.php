<br><br><br>
<div class="container">
<h3>List Detail</h3>
<table class="table table-striped">
    <thead class="thead-dark">
    <tr>
        <th>STT</th>
        <th>Card</th>
        <th>Status</th>
        <th>Date Borrow</th>
        <th>Return Borrow</th>
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
                    <a href="index.php?page=detail-id&id=<?php echo $detail['id'] ?>">
                    <?php echo "Card: " . $detail["id"] ?></td>
                </a>
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

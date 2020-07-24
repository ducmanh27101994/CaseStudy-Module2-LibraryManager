<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" action="index.php?page=search-student">
        <input type="text" name="keyword" placeholder="keyword" required />
        <button type="submit">Search</button>
    </form>
    <a href="index.php?page=add-student">Add Student</a>
    <table>
        <tr>
            <th>STT</th>
            <th>Name</th>
            <th>Class</th>
            <th>Phone</th>
            <th>Address</th>
        </tr>
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
                    <td><a href="index.php?page=update-student&id=<?php echo $student->getId() ?>">Update</a></td>
                    <td><a href="index.php?page=delete-student&id=<?php echo $student->getId() ?>">Delete</a></td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </table>
</body>

</html>
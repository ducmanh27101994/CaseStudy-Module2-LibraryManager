<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <input type="text" name="keyword" />
        <button type="submit">Search</button>
    </form>
    <a href="index.php?page=add-book">Add Book</a>
    <table>
        <tr>
            <th>STT</th>
            <th>Name book</th>
            <th>Author</th>
            <th>Status</th>
            <th>Image</th>
        </tr>
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
                    <td><img src="<?php echo $book->getImage() ?>" style="width: 50px; height: 70px" /></td>
                    <td><a href="index.php?page=update-book&id=<?php echo $book->getId() ?>">Update</a></td>
                    <td><a href="index.php?page=delete-book&id=<?php echo $book->getId() ?>">Delete</a></td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </table>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <tr>
            <th>STT</th>
            <th>Name book</th>
            <th>Author</th>
            <th>Status</th>
            <th>Image</th>
            <th>Category ID</th>
        </tr>
        <?php if (empty($books)) : ?>
            <tr>
                <td>No data</td>
            </tr>
        <?php else : ?>
            <?php foreach ($books as $key => $book) : ?>
                <tr>
                    <td><?php echo ++$key ?></td>
                    <td><?php echo $book->getBook_name() ?></td>
                    <td><?php echo $book->getAuthor() ?></td>
                    <td><?php echo $book->getStatus() ?></td>
                    <td><img src="<?php echo $book->getImage() ?>" /></td>
                    <td><?php echo $book->getCategory_id() ?></td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </table>
</body>

</html>
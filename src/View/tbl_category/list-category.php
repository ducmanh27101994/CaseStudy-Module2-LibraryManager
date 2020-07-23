<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="index.php?page=add-category">Add Category</a>
    <table>
        <tr>
            <th>STT</th>
            <th>Category name</th>
            <th>Comment</th>
        </tr>
        <?php if (empty($listCategory)) : ?>
            <tr>
                <td>No data</td>
            </tr>
        <?php else : ?>
            <?php foreach ($listCategory as $key => $category) : ?>
                <tr>
                    <td><?php echo ++$key ?></td>
                    <td><?php echo $category->getName() ?></td>
                    <td><?php echo $category->getComment() ?></td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </table>
</body>

</html>
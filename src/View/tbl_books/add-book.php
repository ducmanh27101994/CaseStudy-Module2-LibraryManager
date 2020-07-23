<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" enctype="multipart/form-data">
        <input type="text" name="book_name" placeholder="book name" />
        <input type="text" name="author" placeholder="book author" />
        <input type="text" name="status" placeholder="book status" />
        <input type="file" name="image-file" placeholder="image" required />
        <select name="category_id">
            <?php foreach ($categorys as $category) : ?>
                <option value="<?php echo $category->getId(); ?>"><?php echo $category->getName(); ?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Add Book</button>
    </form>
</body>

</html>
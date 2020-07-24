<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" enctype="multipart/form-data">
        <input type="text" name="book_name" value="<?php echo $book['book_name'] ?>" placeholder="book name" required />
        <input type="text" name="author" value="<?php echo $book['author'] ?>" placeholder="book author" required />
        <input type="text" name="status" value="<?php echo $book['status'] ?>" placeholder="book status" required />
        <input type="file" name="image-file" placeholder="image" />
        <select name="category_id">
            <?php foreach ($categorys as $category) : ?>
                <option value="<?php echo $category->getId(); ?>"><?php echo $category->getName(); ?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Update Book</button>
    </form>
</body>

</html>
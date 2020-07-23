<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <input type="text" name="name" value="<?php echo $category['category_name'] ?>" placeholder="category name" required />
        <textarea name="comment" placeholder="comment" required><?php echo $category['comment'] ?></textarea>
        <button type="submit">Update category</button>
    </form>
</body>

</html>
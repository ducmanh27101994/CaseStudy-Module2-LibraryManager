<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <input type="text" name="name" value="<?php echo $student['student_name'] ?>" placeholder="student name" required/>
        <input type="text" name="class" value="<?php echo $student['class'] ?>" placeholder="student class" required/>
        <input type="text" name="phone" value="<?php echo $student['phone'] ?>" placeholder="student phone" required/>
        <input type="text" name="address" value="<?php echo $student['address'] ?>" placeholder="student address" required/>
        <button type="submit">Update</button>
    </form>
</body>

</html>
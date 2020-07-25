<!--<form method="post">-->
<!--    <input type="text" name="name" value="--><?php //echo $student['student_name'] ?><!--" placeholder="student name" required/>-->
<!--    <input type="text" name="class" value="--><?php //echo $student['class'] ?><!--" placeholder="student class" required/>-->
<!--    <input type="text" name="phone" value="--><?php //echo $student['phone'] ?><!--" placeholder="student phone" required/>-->
<!--    <input type="text" name="address" value="--><?php //echo $student['address'] ?><!--" placeholder="student address" required/>-->
<!--    <button type="submit">Update</button>-->
<!--</form>-->

<br><br><br>
<div id="container-book" class="container">
    <h3 id="book-h3">Update Student</h3>
    <form method="post" class="was-validated">
        <div class="form-group">
            <label for="uname">Student Name:</label>
            <input type="text" class="form-control" id="uname" value="<?php echo $student['student_name'] ?>" name="name" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="uname">Class:</label>
            <input type="text" class="form-control" id="uname" value="<?php echo $student['class'] ?>" name="class" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="uname">Phone:</label>
            <input type="text" class="form-control" id="uname" value="<?php echo $student['phone'] ?>" name="phone" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="uname">Address:</label>
            <input type="text" class="form-control" id="uname" value="<?php echo $student['address'] ?>" name="address" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>


        <button id="add-all" type="submit" class="btn btn-primary">Update Student</button>
        <button id="back-add" class="btn btn-secondary" onclick="window.history.go(-1); return false;">Back</button>
    </form>
</div>
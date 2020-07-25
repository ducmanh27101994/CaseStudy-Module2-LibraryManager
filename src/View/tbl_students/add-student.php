<!--<form method="post">-->
<!--    <input type="text" name="name" placeholder="student name" required/>-->
<!--    <input type="text" name="class" placeholder="student class" required/>-->
<!--    <input type="text" name="phone" placeholder="student phone" required/>-->
<!--    <input type="text" name="address" placeholder="student address" required/>-->
<!--    <button type="submit">Add Student</button>-->
<!--</form>-->


<br><br><br>
<div id="container-book" class="container">
    <h3 id="book-h3">Add Student</h3>
    <form method="post" class="was-validated">
        <div class="form-group">
            <label for="uname">Student Name:</label>
            <input type="text" class="form-control" id="uname" placeholder="Enter student name" name="name" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="uname">Class:</label>
            <input type="text" class="form-control" id="uname" placeholder="Enter class" name="class" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="uname">Phone:</label>
            <input type="text" class="form-control" id="uname" placeholder="Enter phone" name="phone" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="uname">Address:</label>
            <input type="text" class="form-control" id="uname" placeholder="Enter address" name="address" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>


        <button id="add-all" type="submit" class="btn btn-primary">Add Student</button>
        <button id="back-add" class="btn btn-secondary" onclick="window.history.go(-1); return false;">Back</button>
    </form>
</div>
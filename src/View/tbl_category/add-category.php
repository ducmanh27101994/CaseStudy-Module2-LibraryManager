<!--<form method="post">-->
<!--    <input type="text" name="name" placeholder="category name" required/>-->
<!--    <textarea name="comment" placeholder="comment" required></textarea>-->
<!--    <button type="submit">Add Category</button>-->
<!--</form>-->

<br><br><br>
<div id="container-book" class="container">
    <h3 id="book-h3">Add Category</h3>
    <form method="post" class="was-validated">
        <div class="form-group">
            <label for="uname">Category Name:</label>
            <input type="text" class="form-control" id="uname" placeholder="Enter category name" name="name" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="uname">Comment:</label>
            <textarea type="text" class="form-control" id="uname" name="comment" required></textarea>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>


        <button id="add-all" type="submit" class="btn btn-primary">Add Category</button>
        <button id="back-add" class="btn btn-secondary" onclick="window.history.go(-1); return false;">Back</button>
    </form>
</div>
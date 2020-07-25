<!---->
<!--<form method="post" enctype="multipart/form-data">-->
<!--        <input type="text" name="book_name" placeholder="book name" />-->
<!--        <input type="text" name="author" placeholder="book author" />-->
<!--        <input type="text" name="status" placeholder="book status" />-->
<!---->
<!--        <select name="category_id">-->
<!--            --><?php //foreach ($categorys as $category) : ?>
<!--                <option value="--><?php //echo $category->getId(); ?><!--">--><?php //echo $category->getName(); ?><!--</option>-->
<!--            --><?php //endforeach; ?>
<!--        </select>-->
<!--    <input type="file" name="image-file" placeholder="image" required />-->
<!--        <button type="submit">Add Book</button>-->
<!--</form>-->

<br><br><br>
<div id="container-book" class="container">
    <h3 id="book-h3">Add Book</h3>
<form method="post" enctype="multipart/form-data" class="was-validated">
    <div class="form-group">
        <label for="uname">Book Name:</label>
        <input type="text" class="form-control" id="uname" placeholder="Enter book name" name="book_name" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
        <label for="uname">Author:</label>
        <input type="text" class="form-control" id="uname" placeholder="Enter author" name="author" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
        <label for="uname">Status:</label>
        <input type="text" class="form-control" id="uname" placeholder="Enter status" name="status" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
        <label for="sel1">Category list:</label>
        <select name="category_id" class="form-control" id="sel1">
            <?php foreach ($categorys as $category) : ?>
                <option value="<?php echo $category->getId(); ?>"><?php echo $category->getName(); ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label for="exampleFormControlFile1">Example file input</label>
        <input name="image-file" type="file" class="form-control-file" id="exampleFormControlFile1">
    </div>


    <button id="add-all" type="submit" class="btn btn-primary">Add Book</button>
</form>
</div>
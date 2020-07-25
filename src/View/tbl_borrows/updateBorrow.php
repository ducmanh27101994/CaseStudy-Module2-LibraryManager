<!--<form method="post">-->
<!--    <input type="text" name="borrow_date" value="--><?php //echo $borrows['borrow_date'] ?><!--" readonly>-->
<!--    <input type="text" name="return_date" value="--><?php //echo $borrows['return_date'] ?><!--" readonly>-->
<!--    <select name="status">-->
<!--        <option value="Borrow Books">Borrow Books</option>-->
<!--        <option value="Give Book Back">Give Book Back</option>-->
<!--    </select>-->
<!--    <button type="submit">Submit</button>-->
<!--    <button onclick="window.history.go(-1); return false;">Back</button>-->
<!--</form>-->

<br><br><br>
<div id="container-book" class="container">
    <h3 id="book-h3">Update Borrow</h3>
    <form method="post" class="was-validated">
        <div class="form-group">
            <label for="uname">Borrow Date:</label>
            <input type="text" class="form-control" id="uname" name="borrow_date" value="<?php echo $borrows['borrow_date'] ?>" readonly>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="uname">Return Date:</label>
            <input type="text" class="form-control" id="uname"  name="return_date" value="<?php echo $borrows['return_date'] ?>" readonly>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="sel1">Status:</label>
            <select name="status" class="form-control" id="sel1">
                <option value="Borrow Books">Borrow Books</option>
                <option value="Give Book Back">Give Book Back</option>
            </select>
        </div>

<!--        <div class="form-group">-->
<!--            <label for="sel1">Category list:</label>-->
<!--            <select name="student_id" class="form-control" id="sel1">-->
<!--                --><?php //foreach ($students as $key => $student): ?>
<!--                    <option value="--><?php //echo $student->getId(); ?><!--">--><?php //echo $student->getName()." - " .$student->getClass(); ?><!--</option>-->
<!--                --><?php //endforeach; ?>
<!--            </select>-->
<!--        </div>-->


        <button id="add-all" type="submit" class="btn btn-primary">Update Borrow</button>
        <button id="back-add" class="btn btn-secondary" onclick="window.history.go(-1); return false;">Back</button>
    </form>
</div>




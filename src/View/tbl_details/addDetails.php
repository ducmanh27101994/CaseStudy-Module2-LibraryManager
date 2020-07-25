<!--<form method="post">-->
<!--    Book:-->
<!--    <select name="book_id">-->
<!--        --><?php //foreach ($books as $key => $book): ?>
<!--            <option value="--><?php //echo $book->getId(); ?><!--">--><?php //echo $book->getBookName()." - ".$book->getAuthor(); ?><!--</option>-->
<!--        --><?php //endforeach;?>
<!--    </select>-->
<!--    Borrow Id:-->
<!--    <select name="borrow_id">-->
<!--        --><?php //foreach ($borrows as $key => $borrow): ?>
<!--            <option value="--><?php //echo $borrow->getId(); ?><!--">--><?php //echo "Card ".$borrow->getId()." - ".$borrow->getBorrowDate(); ?><!--</option>-->
<!--        --><?php //endforeach;?>
<!--    </select>-->
<!---->
<!--    <button type="submit">Submit</button>-->
<!--    <button onclick="window.history.go(-1); return false;">Back</button>-->
<!--</form>-->

<br><br><br>
<div id="container-book" class="container">
    <h3 id="book-h3">Add Books To The Loan Slip</h3>
    <form method="post" class="was-validated">

        <div class="form-group">
            <label for="sel1">Book list:</label>
            <select name="book_id" class="form-control" id="sel1">
                <?php foreach ($books as $key => $book): ?>
                    <option value="<?php echo $book->getId(); ?>"><?php echo $book->getBookName()." - ".$book->getAuthor(); ?></option>
                <?php endforeach;?>
            </select>
        </div>

        <div class="form-group">
            <label for="sel1">Card Id:</label>
            <select name="borrow_id" class="form-control" id="sel1">
                <?php foreach ($borrows as $key => $borrow): ?>
                    <option value="<?php echo $borrow->getId(); ?>"><?php echo "Card ".$borrow->getId()." - ".$borrow->getBorrowDate(); ?></option>
                <?php endforeach;?>
            </select>
        </div>


        <button id="add-all" type="submit" class="btn btn-primary">Submit</button>
        <button id="back-add" class="btn btn-secondary" onclick="window.history.go(-1); return false;">Back</button>
    </form>
</div>
<?php

namespace Lib\Controller;

use Lib\Model\BookManager;

class BookController
{
    private $bookManager;
    function __construct()
    {
        $this->bookManager = new BookManager();
    }
    function viewBook()
    {
        $books = $this->bookManager->getAll();
        include_once('src/View/tbl_books/list-book.php');
    }
}

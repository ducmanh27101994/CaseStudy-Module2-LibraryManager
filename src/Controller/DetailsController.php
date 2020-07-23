<?php


namespace Lib\Controller;


use Lib\Model\BookManager;
use Lib\Model\BorrowManager;
use Lib\Model\DetailManager;

class DetailsController
{
    protected $detailManager;
    protected $bookManager;
    protected $borrowManager;

    public function __construct()
    {
        $this->detailManager = new DetailManager();
        $this->bookManager = new BookManager();
        $this->borrowManager = new BorrowManager();
    }

    function addDetail()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
           $books = $this->bookManager->getAll();
           $borrows = $this->borrowManager->getAllBorrow();
            include_once "src/View/tbl_details/addDetails.php";
        } else {
            $book_id = $_REQUEST['book_id'];
            $borrow_id = $_REQUEST['borrow_id'];
            $this->detailManager->addDetail($book_id,$borrow_id);
            header('location:index.php?page=list-borrow');
        }
    }

}
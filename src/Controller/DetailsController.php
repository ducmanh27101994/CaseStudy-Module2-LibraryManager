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
            $this->detailManager->addDetail($book_id, $borrow_id);
            header("location:index.php?page=detail-id&id=$borrow_id");
        }
    }

    function viewListDetail()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $details = $this->detailManager->viewListDetail();
            include_once 'src/View/tbl_details/listDetails.php';
        }
    }

    function viewDetailById()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $id = $_REQUEST['id'];
            $details = $this->detailManager->viewListDetailById($id);
            include_once 'src/View/tbl_details/detailById.php';
        }
    }

    function fullListDetail()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $details = $this->detailManager->showFullListDetail();
            include_once 'src/View/tbl_details/fullListDetails.php';
        }
    }

    function showBorrowBook()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $details = $this->detailManager->showBorrowBook();
            include_once 'src/View/tbl_details/showBookBorrow.php';
        }
    }

    function showGiveBookBack()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $details = $this->detailManager->showGiveBookBack();
            include_once 'src/View/tbl_details/showGiveBookBack.php';
        }
    }

    function deleteDetail()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $book_id = $_REQUEST['book_id'];
            $borrow_id = $_REQUEST['borrow_id'];
            $this->detailManager->deleteDetail($book_id, $borrow_id);
            header("location:index.php?page=detail-id&id=$borrow_id");
        }
    }

}
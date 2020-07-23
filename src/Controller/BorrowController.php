<?php


namespace Lib\Controller;


use Lib\Model\Borrow;
use Lib\Model\BorrowManager;
use Lib\Model\StudentManager;

class BorrowController
{
    protected $studentManager;
    protected $borrowManager;

    public function __construct()
    {
        $this->borrowManager = new BorrowManager();
        $this->studentManager = new StudentManager();
    }

    function viewAllBorrow()
    {
        $borrows = $this->borrowManager->getAllBorrow();
        include_once 'src/View/tbl_borrows/listBorrow.php';
    }

    function addBorrow()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $students = $this->studentManager->getAll();
            include 'src/View/tbl_borrows/addBorrow.php';
        } else {
            $id = $_REQUEST['id'];
            $borrow_date = $_REQUEST['borrow_date'];
            $return_date = $_REQUEST['return_date'];
            $status = $_REQUEST['status'];
            $student_id = $_REQUEST['student_id'];

            $borrow = new Borrow($borrow_date, $return_date, $status, $student_id);
            $this->borrowManager->addBorrow($borrow);
            header('location:index.php?page=add-detail');
        }
    }

    function deleteBorrow(){
        if ($_SERVER['REQUEST_METHOD']=='GET'){
            $id = $_REQUEST['id'];
            $this->borrowManager->deleteBorrow($id);
            header('location:index.php?page=list-borrow');
        }
    }

    function updateBorrow(){
        if ($_SERVER['REQUEST_METHOD']=='GET'){
            $id = $_REQUEST['id'];
            $borrows = $this->borrowManager->getBorrowById($id);
            include_once 'src/View/tbl_borrows/updateBorrow.php';
        } else {
            $id = $_REQUEST['id'];
            $borrow_date = $_REQUEST['borrow_date'];
            $return_date = $_REQUEST['return_date'];
            $status = $_REQUEST['status'];
            $student_id = $_REQUEST['student_id'];

            $borrow = new Borrow($borrow_date,$return_date,$status,$student_id);
            $borrow->setId($id);
            $this->borrowManager->updateBorrow($borrow);
            header('location:index.php?page=list-borrow');
        }
    }

    function searchBorrow(){
        if ($_SERVER['REQUEST_METHOD']=='POST'){
            $keyword = $_POST['keyword-borrow'];
            $return_date1 = $_POST['return_date1'];
            $return_date2 = $_POST['return_date2'];
            $searchBorrow = $_POST['search-borrow'];
            $searchDate = $_POST['search-date'];

            if (isset($searchBorrow)) {
                $borrows = $this->borrowManager->searchBorrow($keyword);
                include_once "src/View/tbl_borrows/listBorrow.php";
            } elseif (isset($searchDate)){
                $borrows = $this->borrowManager->searchDateBorrow($return_date1,$return_date2);
                include_once "src/View/tbl_borrows/listBorrow.php";
            }
        }
    }


}
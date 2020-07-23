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

    function viewAllBorrow(){
        $borrows = $this->borrowManager->getAllBorrow();
        include_once 'src/View/tbl_borrows/listBorrow.php';
    }

    function addBorrow(){
        if ($_SERVER['REQUEST_METHOD']=='GET'){
            $students = $this->studentManager->getAll();
            include_once 'src/View/tbl_borrows/addBorrow.php';
        } else {
            $id = $_REQUEST['id'];
            $borrow_date = $_REQUEST['borrow_date'];
            $return_date = $_REQUEST['return_date'];
            $status = $_REQUEST['status'];
            $student_id = $_REQUEST['student_id'];

            $borrow = new Borrow($borrow_date,$return_date,$status,$student_id);
            $this->borrowManager->addBorrow($borrow);
            header('location:index.php?page=list-borrow');
        }
    }

}
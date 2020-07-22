<?php


namespace Lib\Controller;


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

}
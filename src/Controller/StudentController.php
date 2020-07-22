<?php
    namespace Lib\Controller;

use Lib\Model\StudentManager;

class StudentController{
        private $studentManager;
        function __construct()
        {
            $this->studentManager = new StudentManager();
        }
        function viewStudent(){
            $listStudent = $this->studentManager->getAll();
            include_once('src/View/tbl_students/list-student.php');
        }
    }
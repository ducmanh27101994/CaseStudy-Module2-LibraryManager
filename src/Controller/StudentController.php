<?php

namespace Lib\Controller;

use Lib\Model\Student;
use Lib\Model\StudentManager;

class StudentController
{
    private $studentManager;
    function __construct()
    {
        $this->studentManager = new StudentManager();
    }
    function viewStudent()
    {
        $listStudent = $this->studentManager->getAll();
        include_once('src/View/tbl_students/list-student.php');
    }
    function addStudent()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET')
            include_once('src/View/tbl_students/add.php');
        else {
            $name = $_REQUEST['name'];
            $class = $_REQUEST['class'];
            $phone = $_REQUEST['phone'];
            $address = $_REQUEST['address'];
            $student = new Student($name, $class, $phone, $address);
            $this->studentManager->add($student);
            header('location:index.php?page=list-student');
        }
    }
}
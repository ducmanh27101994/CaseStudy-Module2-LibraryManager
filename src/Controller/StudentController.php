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
        $students = $this->studentManager->getAll();
        include_once('src/View/tbl_students/list-student.php');
    }
    function addStudent()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET')
            include_once('src/View/tbl_students/add-student.php');
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
    function updateStudent()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $id = $_REQUEST['id'];
            $student = $this->studentManager->getStudentById($id);
            include_once('src/View/tbl_students/update-student.php');
        } else {
            $id = $_REQUEST['id'];
            $student_name = $_POST['name'];
            $class = $_REQUEST['class'];
            $phone = $_REQUEST['phone'];
            $address = $_REQUEST['address'];
            $student = new Student($student_name, $class, $phone, $address);
            $student->setId($id);
            $this->studentManager->update($student);
            header('location:index.php?page=list-student');
        }
    }
    function deleteStudent()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $id = $_REQUEST['id'];
            $this->studentManager->delete($id);
            header('location:index.php?page=list-student');
        }
    }
    function searchStudent()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $keyword = $_REQUEST['keyword'];
            $students = $this->studentManager->search($keyword);
            include_once('src/View/tbl_students/list-student.php');
        }
    }
}

<?php

use Lib\Controller\CategoryController;
use Lib\Controller\StudentController;

require __DIR__ . "/vendor/autoload.php";
$studentController = new StudentController();
$categoryController = new CategoryController();
$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : "";
switch ($page) {
    case 'list-student':
        $studentController->viewStudent();
        break;
    case 'add-student':
        $studentController->addStudent();
        break;
    case 'update-student':
        $studentController->updateStudent();
        break;
    case 'delete-student':
        $studentController->deleteStudent();
        break;
    case 'list-category':
        $categoryController->viewCategory();
        break;
    case 'add-category':
        $categoryController->addCategory();
        break;
    default:
        $studentController->viewStudent();
}

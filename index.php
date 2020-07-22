<?php

use Lib\Controller\StudentController;

require __DIR__ . "/vendor/autoload.php";
$studentController = new StudentController();
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
    default:
        $studentController->viewStudent();
}

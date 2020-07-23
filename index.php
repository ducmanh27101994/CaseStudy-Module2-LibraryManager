<?php

use Lib\Controller\BookController;
use Lib\Controller\CategoryController;
use Lib\Controller\StudentController;

require __DIR__ . "/vendor/autoload.php";
$studentController = new StudentController();
$borrowController = new \Lib\Controller\BorrowController();
$categoryController = new CategoryController();
$bookController = new BookController();
$detailController = new \Lib\Controller\DetailsController();

$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : "";
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php include_once 'src/View/Menu/menu.php'; ?>
    <br>
    <hr />
    <?php
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
        case 'update-category':
            $categoryController->updateCategory();
            break;
        case 'delete-category':
            $categoryController->deleteCategory();
            break;
        case 'list-book':
            $bookController->viewBook();
            break;
        case 'add-book':
            $bookController->addBook();
            break;
        case 'delete-book':
            $bookController->deleteBook();
            break;
        case 'list-borrow':
            $borrowController->viewAllBorrow();
            break;
        case 'add-borrow':
            $borrowController->addBorrow();
            break;
        case 'delete-borrow':
            $borrowController->deleteBorrow();
            break;
        case 'update-borrow':
            $borrowController->updateBorrow();
            break;
        case 'search-borrow':
            $borrowController->searchBorrow();
            break;
        case 'add-detail':
            $detailController->addDetail();
            break;
        case 'list-detail':
            $detailController->viewListDetail();
            break;
        default:
            $studentController->viewStudent();
    }
    ?>
</body>

</html>
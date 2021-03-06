<?php
session_start();

use Lib\Controller\BookController;
use Lib\Controller\CategoryController;
use Lib\Controller\StudentController;

require __DIR__ . "/vendor/autoload.php";
$auth = new \Lib\Mid\Auth();
$auth->isLogin();

$studentController = new StudentController();
$borrowController = new \Lib\Controller\BorrowController();
$categoryController = new CategoryController();
$bookController = new BookController();
$detailController = new \Lib\Controller\DetailsController();
$userController = new \Lib\Controller\UserController();

$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $checkBorrow = $_POST['checkBorrow'];

    if ($checkBorrow === 'BOOK BORROWS') {
        header('location:index.php?page=borrowBook-detail');
    } elseif ($checkBorrow === 'RETURN BOOKS BORROWS') {
        header('location:index.php?page=giveBookBack-detail');
    }

}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link href="styles.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <title>Document</title>

</head>

<body>
    <?php include_once 'src/View/Menu/menu.php'; ?>

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
        case 'search-student':
            $studentController->searchStudent();
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
        case 'search-category':
            $categoryController->searchCategory();
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
        case 'update-book':
            $bookController->updateBook();
            break;
        case 'search-book':
            $bookController->searchBook();
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
        case 'detail-id':
            $detailController->viewDetailById();
            break;
        case 'fullList-detail':
            $detailController->fullListDetail();
            break;
        case 'borrowBook-detail':
            $detailController->showBorrowBook();
            break;
        case 'giveBookBack-detail':
            $detailController->showGiveBookBack();
            break;
        case 'delete-detail':
            $detailController->deleteDetail();;
            break;
        case 'logOut':
            $userController->logOut();
            break;
        case 'register':
            include_once('src/View/tbl_users/register.php');
            break;
        case 'searchId':
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $checkBorrow = $_POST['checkBorrow'];
        if ($checkBorrow === 'card') {
            $detailController->searchId();
        } elseif ($checkBorrow ==='category'){
            $detailController->searchCategory();
        } elseif ($checkBorrow==='book'){
            $detailController->searchBookName();
        } elseif ($checkBorrow==='student'){
            $detailController->searchStudentName();
        }
    }
        break;
        default:
            $studentController->viewStudent();
    }
    ?>

</body>

</html>
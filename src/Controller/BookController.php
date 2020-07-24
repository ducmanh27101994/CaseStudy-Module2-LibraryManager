<?php

namespace Lib\Controller;

use Lib\Model\Book;
use Lib\Model\BookManager;
use Lib\Model\CategoryManager;

class BookController
{
    private $bookManager;
    private $categoryManager;
    function __construct()
    {
        $this->bookManager = new BookManager();
        $this->categoryManager = new CategoryManager();
    }
    function viewBook()
    {
        $books = $this->bookManager->getAll();
        include_once('src/View/tbl_books/list-book.php');
    }
    function addBook()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $categorys = $this->categoryManager->getAll();
            include_once('src/View/tbl_books/add-book.php');
        } else {
            $file = $_FILES['image-file']['tmp_name'];
            $path = "uploads/" . $_FILES['image-file']['name'];
            if (move_uploaded_file($file, $path))
                echo 'Success upload file';
            else echo 'Fail to upload file';
            $book_name = $_REQUEST['book_name'];
            $author = $_REQUEST['author'];
            $status = $_REQUEST['status'];
            $category_id = $_REQUEST['category_id'];
            $book = new Book($book_name, $author, $status, $path, $category_id);
            $this->bookManager->add($book);
            header('location:index.php?page=list-book');
        }
    }
    function deleteBook()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $id = $_REQUEST['id'];
            $this->bookManager->delete($id);
            header('location:index.php?page=list-book');
        }
    }
    function updateBook()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $categorys = $this->categoryManager->getAll();
            $id = $_REQUEST['id'];
            $book = $this->bookManager->getBookById($id);
            include_once('src/View/tbl_books/update-book.php');
        } else {
            $file = $_FILES['image-file']['tmp_name'];
            $path = "uploads/" . $_FILES['image-file']['name'];
            if (move_uploaded_file($file, $path))
                echo 'Success upload file';
            else echo 'Fail to upload file';
            $book_name = $_REQUEST['book_name'];
            $author = $_REQUEST['author'];
            $status = $_REQUEST['status'];
            $category_id = $_REQUEST['category_id'];
            $book = new Book($book_name, $author, $status, $path, $category_id);
            $this->bookManager->update($book);
            header('location:index.php?page=list-book');
        }
    }
    function searchBook()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $keyword = $_POST['keyword'];
            $books = $this->bookManager->search($keyword);
            include_once('src/View/tbl_books/list-book.php');
        }
    }
}

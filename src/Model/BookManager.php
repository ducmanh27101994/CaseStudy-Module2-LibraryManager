<?php

namespace Lib\Model;

class BookManager
{
    private $database;
    function __construct()
    {
        $db = new DBConnect();
        $this->database = $db->connect();
    }
    function getAll()
    {
        $sql = "SELECT * FROM `tbl_books` ORDER BY `id` DESC";
        $statement = $this->database->query($sql);
        $data = $statement->fetchAll();
        $books = [];
        foreach ($data as $item) {
            $book = new Book($item['book_name'], $item['author'], $item['status'], $item['image'], $item['category_id']);
            $book->setId($item['id']);
            array_push($books, $book);
        }
        return $books;
    }
    function add($book)
    {
        $sql = "INSERT INTO `tbl_books`(`book_name`, `author`, `status`, `image`, `category_id`) VALUES (:book_name,:author,:status,:image,:category_id)";
        $statement = $this->database->prepare($sql);
        $statement->bindParam(':book_name', $book->getBook_name());
        $statement->bindParam(':author', $book->getAuthor());
        $statement->bindParam(':status', $book->getStatus());
        $statement->bindParam(':image', $book->getImage());
        $statement->bindParam(':category_id', $book->getCategory_id());
        $statement->execute();
    }
    function delete($id)
    {
        $sql = "DELETE FROM `tbl_books` WHERE `id` = :id";
        $statement = $this->database->prepare($sql);
        $statement->bindParam(':id', $id);
        $statement->execute();
    }
}

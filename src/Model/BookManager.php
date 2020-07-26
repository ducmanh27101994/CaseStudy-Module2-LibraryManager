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
        $statement->bindParam(':book_name', $book->getBookName());
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
    function update($book)
    {
        $sql = "UPDATE `tbl_books` SET `book_name`=:book_name,`author`=:author,`status`=:status,`image`=:image,`category_id`=:category_id WHERE `id` = :id";
        $statement = $this->database->prepare($sql);
        $statement->bindParam(':id',$book->getId());
        $statement->bindParam(':book_name', $book->getBookName());
        $statement->bindParam(':author', $book->getAuthor());
        $statement->bindParam(':status', $book->getStatus());
        $statement->bindParam(':image', $book->getImage());
        $statement->bindParam(':category_id', $book->getCategory_id());
        $statement->execute();
    }
    function getBookById($id)
    {
        $sql = "SELECT * FROM `tbl_books` WHERE `id` = :id";
        $statement = $this->database->prepare($sql);
        $statement->bindParam(':id', $id);
        $statement->execute();
        $book = $statement->fetch();
        return $book;
    }
    function search($keyword)
    {
        $sql = "SELECT * FROM `tbl_books` WHERE `book_name` LIKE :keyword ";
        $statement = $this->database->prepare($sql);
        $statement->bindValue(':keyword', '%' . $keyword . '%');
        $statement->execute();
        $data = $statement->fetchAll();
        $books = [];
        foreach ($data as $key => $item) {
            $book = new Book($item['book_name'], $item['author'], $item['status'], $item['image'], $item['category_id']);
            $book->setId($item['id']);
            array_push($books, $book);
        }
        return $books;
    }
}

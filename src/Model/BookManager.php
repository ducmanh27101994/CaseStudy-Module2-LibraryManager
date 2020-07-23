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
        $sql = "SELECT * FROM `tbl_books`";
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
}

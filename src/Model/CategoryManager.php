<?php

namespace Lib\Model;

class CategoryManager
{
    private $database;
    function __construct()
    {
        $db = new DBConnect();
        $this->database = $db->connect();
    }
    function getAll()
    {
        $sql = "SELECT * FROM tbl_category";
        $statement = $this->database->query($sql);
        $data = $statement->fetchAll();
        $listCategory = [];
        foreach ($data as $item) {
            $category = new Category($item['category_name'], $item['comment']);
            $category->setId($item['id']);
            array_push($listCategory, $category);
        }
        return $listCategory;
    }
    function add($category)
    {
        $sql = "INSERT INTO `tbl_category` (`category_name`, `comment`) VALUES (:name, :comment)";
        $statement = $this->database->prepare($sql);
        $statement->bindParam(':name', $category->getName());
        $statement->bindParam(':comment', $category->getComment());
        $statement->execute();
    }
}

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
        $sql = "SELECT * FROM `tbl_category` ORDER BY `id` DESC";
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
        $sql = "INSERT INTO `tbl_category`(`category_name`, `comment`) VALUES (:name, :comment)";
        $statement = $this->database->prepare($sql);
        $statement->bindParam(':name', $category->getName());
        $statement->bindParam(':comment', $category->getComment());
        $statement->execute();
    }
    function update($category)
    {
        $sql = "UPDATE `tbl_category` SET `category_name` = :name, `comment` = :comment WHERE `id` = :id";
        $statement = $this->database->prepare($sql);
        $statement->bindParam(':id', $category->getId());
        $statement->bindParam(':name', $category->getName());
        $statement->bindParam(':comment', $category->getComment());
        $statement->execute();
    }
    function getCategoryById($id)
    {
        $sql = "SELECT * FROM `tbl_category` WHERE `id` = :id";
        $statement = $this->database->prepare($sql);
        $statement->bindParam(':id', $id);
        $category = $statement->fetch();
        return $category;
    }
    function delete($id)
    {
        $sql = "DELETE FROM `tbl_category` WHERE `id` = :id";
        $statement = $this->database->prepare($sql);
        $statement->bindParam(':id', $id);
        $statement->execute();
    }
    function search($keyword)
    {
        $sql = "SELECT * FROM `tbl_category` WHERE `category_name` LIKE :keyword";
        $statement = $this->database->prepare($sql);
        $statement->bindValue(':keyword', '%' . $keyword . '%');
        $statement->execute();
        $data = $statement->fetchAll();
        $listCategory = [];
        foreach ($data as $item) {
            $category = new Category($item['category_name'], $item['comment']);
            $category->setId($item['id']);
            array_push($listCategory, $category);
        }
        return $listCategory;
    }
}

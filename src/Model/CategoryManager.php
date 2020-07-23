<?php
    namespace Lib\Model;
    class CategoryManager{
        private $database;
        function __construct()
        {
            $db = new DBConnect();
            $this->database = $db->connect();
        }
        function getAll(){
            $sql = "SELECT * FROM tbl_category";
            $statement = $this->database->query($sql);
            $data = $statement->fetchAll();
            $list = [];
            foreach($data as $item){
                $cate = new Category($item['category_name'], $item['comment']);
                $cate->setId($item['id']);
                array_push($list, $cate);
            }
            return $list;
        }
    }
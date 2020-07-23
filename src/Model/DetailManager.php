<?php


namespace Lib\Model;


class DetailManager
{
    protected $databaseDetail;

    public function __construct()
    {
        $this->databaseDetail = new DBConnect();
    }

    function addDetail($book_id,$borrow_id){
        $sql = "INSERT INTO `tbl_details`(`book_id`, `borrow_id`) VALUES (:book_id,:borrow_id)";
        $statement = $this->databaseDetail->connect()->prepare($sql);
        $statement->bindParam(':book_id',$book_id);
        $statement->bindParam(':borrow_id',$borrow_id);
        $statement->execute();
    }

    function viewListDetail(){
        $sql = "SELECT * FROM `tbl_borrows` order by id desc ";
        $statement = $this->databaseDetail->connect()->query($sql);
        return $statement->fetchAll();
    }



}
<?php


namespace Lib\Model;


class BorrowManager
{
    protected $databaseBorrow;

    public function __construct()
    {
        $this->databaseBorrow = new DBConnect();
    }

    function getAllBorrow(){
        $sql = "SELECT * FROM `tbl_borrows` ORDER BY `id` desc ";
        $statement = $this->databaseBorrow->connect()->query($sql);
        $data = $statement->fetchAll();
        $arr = [];
        foreach ($data as $item){
            $borrow = new Borrow($item['borrow_date'],$item['return_date'],$item['status'],$item['student_id']);
            $borrow->setId($item['id']);
            array_push($arr,$borrow);
        }
        return $arr;
    }

    function addBorrow($borrow){
        $sql = "INSERT INTO `tbl_borrows`(`borrow_date`, `return_date`, `status`, `student_id`) VALUES (:borrow_date,:return_date,:status,:student_id)";
        $statement = $this->databaseBorrow->connect()->prepare($sql);
        $statement->bindParam(':borrow_date',$borrow->getBorrowDate());
        $statement->bindParam(':return_date',$borrow->getReturnDate());
        $statement->bindParam(':status',$borrow->getStatus());
        $statement->bindParam(':student_id',$borrow->getStudentId());
        $statement->execute();
    }

    function deleteBorrow($id){
        $sql = "DELETE FROM `tbl_borrows` WHERE `id`=:id";
        $statement = $this->databaseBorrow->connect()->prepare($sql);
        $statement->bindParam(':id',$id);
        $statement->execute();
    }

    function getBorrowById($id){
        $sql = "SELECT * FROM `tbl_borrows` WHERE `id`=:id";
        $statement = $this->databaseBorrow->connect()->prepare($sql);
        $statement->bindParam(':id',$id);
        $statement->execute();
        return $statement->fetch();
    }

    function updateBorrow($borrow){
        $sql = "UPDATE `tbl_borrows` SET `id`=:id, `borrow_date`=:borrow_date, `return_date`=:return_date, `status`=:status WHERE `id`=:id";
        $statement = $this->databaseBorrow->connect()->prepare($sql);
        $statement->bindParam(':id',$borrow->getId());
        $statement->bindParam(':borrow_date',$borrow->getBorrowDate());
        $statement->bindParam(':return_date',$borrow->getReturnDate());
        $statement->bindParam(':status',$borrow->getStatus());
        $statement->execute();
    }


}
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
        $sql = "SELECT * FROM `tbl_borrows`";
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

}
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

    function viewListDetailById($id){
        $sql = "SELECT tbl_students.student_name, tbl_students.class,tbl_students.phone,tbl_students.address, tbl_borrows.borrow_date,tbl_borrows.return_date,tbl_borrows.status,tbl_books.book_name,tbl_books.author,tbl_borrows.id,tbl_details.book_id,tbl_details.borrow_id, tbl_category.category_name FROM tbl_students INNER JOIN tbl_borrows ON tbl_students.id=tbl_borrows.student_id INNER JOIN tbl_details ON tbl_borrows.id = tbl_details.borrow_id INNER JOIN tbl_books ON tbl_details.book_id=tbl_books.id INNER JOIN tbl_category ON tbl_books.category_id=tbl_books.id WHERE tbl_borrows.id = :id";
        $statement = $this->databaseDetail->connect()->prepare($sql);
        $statement->bindParam(':id',$id);
        $statement->execute();
        return $statement->fetchAll();
    }

    function showFullListDetail(){
        $sql = "SELECT tbl_students.student_name, tbl_students.class,tbl_students.phone,tbl_students.address, tbl_borrows.borrow_date,tbl_borrows.return_date,tbl_borrows.status,tbl_books.book_name,tbl_books.author,tbl_borrows.id,tbl_details.book_id,tbl_details.borrow_id, tbl_category.category_name FROM tbl_students INNER JOIN tbl_borrows ON tbl_students.id=tbl_borrows.student_id INNER JOIN tbl_details ON tbl_borrows.id = tbl_details.borrow_id INNER JOIN tbl_books ON tbl_details.book_id=tbl_books.id INNER JOIN tbl_category ON tbl_books.category_id=tbl_books.id order by id desc";
        $statement = $this->databaseDetail->connect()->query($sql);
        return $statement->fetchAll();
    }

    function showBorrowBook(){
        $sql = "SELECT tbl_students.student_name, tbl_students.class,tbl_students.phone,tbl_students.address, tbl_borrows.borrow_date,tbl_borrows.return_date,tbl_borrows.status,tbl_books.book_name,tbl_books.author,tbl_borrows.id,tbl_details.book_id,tbl_details.borrow_id, tbl_category.category_name FROM tbl_students INNER JOIN tbl_borrows ON tbl_students.id=tbl_borrows.student_id INNER JOIN tbl_details ON tbl_borrows.id = tbl_details.borrow_id INNER JOIN tbl_books ON tbl_details.book_id=tbl_books.id INNER JOIN tbl_category ON tbl_books.category_id=tbl_books.id WHERE tbl_borrows.status= \"Borrow Books\"";
        $statement = $this->databaseDetail->connect()->query($sql);
        return $statement->fetchAll();
    }

    function showGiveBookBack(){
        $sql = "SELECT tbl_students.student_name, tbl_students.class,tbl_students.phone,tbl_students.address, tbl_borrows.borrow_date,tbl_borrows.return_date,tbl_borrows.status,tbl_books.book_name,tbl_books.author,tbl_borrows.id,tbl_details.book_id,tbl_details.borrow_id, tbl_category.category_name FROM tbl_students INNER JOIN tbl_borrows ON tbl_students.id=tbl_borrows.student_id INNER JOIN tbl_details ON tbl_borrows.id = tbl_details.borrow_id INNER JOIN tbl_books ON tbl_details.book_id=tbl_books.id INNER JOIN tbl_category ON tbl_books.category_id=tbl_books.id WHERE tbl_borrows.status= \"Give Book Back\"";
        $statement = $this->databaseDetail->connect()->query($sql);
        return $statement->fetchAll();
    }



}
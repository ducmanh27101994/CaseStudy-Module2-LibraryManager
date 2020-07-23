<?php

namespace Lib\Model;

class StudentManager
{
    private $database;
    function __construct()
    {
        $db = new DBConnect();
        $this->database = $db->connect();
    }
    function getAll()
    {
        $sql = "SELECT * FROM tbl_students";
        $statement = $this->database->query($sql);
        $data = $statement->fetchAll();
        $arr = [];
        foreach ($data as $person) {
            $student = new Student($person['student_name'], $person['class'], $person['phone'], $person['address']);
            $student->setId($person['id']);
            array_push($arr, $student);
        }
        return $arr;
    }
    function add($student)
    {
        $sql = "INSERT INTO `tbl_students` (`student_name`, `class`, `phone`, `address`) VALUES (:student_name, :class, :phone, :address)";
        $statement = $this->database->prepare($sql);
        $statement->bindParam(':student_name', $student->getName());
        $statement->bindParam(':class', $student->getClass());
        $statement->bindParam(':phone', $student->getPhone());
        $statement->bindParam(':address', $student->getAddress());
        $statement->execute();
    }
    function update($student)
    {
        $sql = "UPDATE `tbl_students` SET `student_name`=:name,`class`=:class,`phone`=:phone,`address`=:address WHERE `id` = :id";
        $statement = $this->database->prepare($sql);
        $statement->bindParam(':id', $student->getId());
        $statement->bindParam(':name', $student->getName());
        $statement->bindParam(':class', $student->getClass());
        $statement->bindParam(':phone', $student->getPhone());
        $statement->bindParam(':address', $student->getAddress());
        $statement->execute();
    }
    function getStudentById($id)
    {
        $sql = "SELECT * FROM `tbl_students` WHERE `id` = :id";
        $statement = $this->database->prepare($sql);
        $statement->bindParam(':id', $id);
        $statement->execute();
        $student = $statement->fetch();
        return $student;
    }
    function delete($id)
    {
        $sql = "DELETE FROM `tbl_students` WHERE `id` = :id";
        $statement = $this->database->prepare($sql);
        $statement->bindParam(':id', $id);
        $statement->execute();
    }
}

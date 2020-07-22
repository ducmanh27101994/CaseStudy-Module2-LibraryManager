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
        $students = [];
        foreach ($data as $person) {
            $student = new Student($person['student_name'], $person['class'], $person['phone'], $person['address']);
            $student->setId($person['id']);
            array_push($students, $student);
        }
        return $students;
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
}
<?php


namespace Lib\Model;


class UserManager
{
    protected $databaseUser;

    public function __construct()
    {
        $this->databaseUser=new DBConnect();
    }

    function getUser($username,$password){
        $sql = "SELECT * FROM tbl_users WHERE username = :username AND password = :password";
        $statement = $this->databaseUser->connect()->prepare($sql);
        $statement->bindParam(':username',$username);
        $statement->bindParam(':password',$password);
        $statement->execute();
        return $statement->fetch();
    }
}
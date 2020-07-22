<?php

namespace Lib\Model;

use PDOException;
use PDO;

class DBConnect
{
    private $dsn;
    private $username;
    private $password;
    function __construct()
    {
        $this->dsn = 'mysql:host=localhost;dbname=LibraryManager;charset=utf8';
        $this->username = 'leducmanh';
        $this->password = 'leducmanh';
    }
    function connect()
    {
        try {
            return new PDO($this->dsn, $this->username, $this->password);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}

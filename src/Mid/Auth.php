<?php
namespace Lib\Mid;

class Auth
{

    function isLogin(){
        if (!isset($_SESSION['isLogin'])|| !$_SESSION['isLogin'] ){
            header('location:src/View/tbl_users/login.php');
        }
    }
}
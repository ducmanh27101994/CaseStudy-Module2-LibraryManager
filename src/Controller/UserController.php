<?php


namespace Lib\Controller;


use Lib\Model\UserManager;

class UserController
{
    protected $userManager;

    public function __construct()
    {
        $this->userManager=new UserManager();
    }

    function login($username,$password){
        $result = $this->userManager->getUser($username,$password);
        if (is_array($result)){
            $_SESSION['isLogin'] = true;
            $_SESSION['userLogin'] = $result;
            header('location:../../../index.php');
        } else {
            header('location:login.php');
        }
    }

    function logOut(){
        session_destroy();
        header('location:index.php');
    }

    function addUser(){
        if ($_SERVER['REQUEST_METHOD']=='POST'){
            $username = $_REQUEST['username'];
            $password = $_REQUEST['password'];
            $fullname = $_REQUEST['fullname'];
            $phone = $_REQUEST['phone'];
            $this->userManager->addUser($fullname,$username,$password,$phone);
            header('location:login.php');
        }
    }
}
<?php


namespace Lib\Controller;


use Lib\Model\DetailManager;

class DetailsController
{
    protected $detailManager;


    public function __construct()
    {
        $this->detailManager = new DetailManager();
    }

//    function addDetail(){
//        if ($_SERVER['REQUEST_METHOD']=='GET'){
//
//        }
//    }
//
}
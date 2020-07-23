<?php

namespace Lib\Controller;

use Lib\Model\CategoryManager;

class CategoryController
{
    private $categoryManager;
    function __construct()
    {
        $this->categoryManager = new CategoryManager();
    }
    function viewCategory()
    {
        $listCategory = $this->categoryManager->getAll();
        include_once('src/View/tbl_category/list-category.php');
    }
    function addCategory()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET')
            include_once('src/View/tbl_category/add.php');
        else {
            $category_name = $_REQUEST['category_name'];
            $comment = $_REQUEST['comment'];
            $this->categoryManager->add($category);
            header('index.php?page=list-category');
        }
    }
}

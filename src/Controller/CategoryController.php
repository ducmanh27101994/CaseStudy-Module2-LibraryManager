<?php

namespace Lib\Controller;

use Lib\Model\Category;
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
        $listManager = $this->categoryManager->getAll();
        include_once('src/View/tbl_category/list-category.php');
    }
    function addCategory()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET')
            include_once('src/View/tbl_category/add-category.php');
        else {
            $name = $_REQUEST['name'];
            $comment = $_REQUEST['comment'];
            $category = new Category($name, $comment);
            $this->categoryManager->add($category);
            header('location:index.php?page=list-category');
        }
    }
}

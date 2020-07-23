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
        $listManager = $this->categoryManager->getAll();
        include_once('src/View/tbl_category/list-category.php');
    }
}

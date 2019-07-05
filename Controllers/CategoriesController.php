<?php

namespace my_shop\Controllers;

include 'DAO\CategoryDAO.php';
include 'Models\Category.php';

use my_shop\DAO\CategoryDAO;
use my_shop\Models\Category;

class CategoriesController {

    public function __construct() {}

    public function addCategory($categoryData=array()) {
        $type = ($categoryData['type']) ? $categoryData['type'] : null;
        $description = ($categoryData['description']) ? $categoryData['description'] : null;
        
        $category = new Category();
        $category->setType($type);
        $category->setDescription($description);
        $daoCategory = new CategoryDAO();
        $daoCategory->addCategory($category);
    }

    public function getCategories() {
        $daoCategory = new CategoryDAO();
        return $daoCategory->getCategories();
    }
}
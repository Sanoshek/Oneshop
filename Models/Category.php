<?php

namespace my_shop\Models;

class Category {
    private $categoryId;
    private $type;
    private $description;

    public function __construct() {
    }

    public function getCategories() {
        return array(
            'categoryId' => $this->categoryId,
            'type' => $this->type,
            'description' => $this->description
        );
    }

    public function setType($type) {
        $this->type = $type;
    }
    
    public function setDescription($description) {
        $this->description = $description;
    }

    public function getType() {
        return $this->type;
    }

    public function getDescription() {
        return $this->description;
    }
}

?>

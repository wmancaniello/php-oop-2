<!-- Product erediterà da Item -->

<?php
require_once __DIR__ . "/item.php";

class Product extends Item
{
    private $category;
    private $type;

    public function __construct($title, $price, $image, Category $category, $type)
    {
        parent::__construct($title, $price, $image);
        $this->category = $category;
        $this->type = $type;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function getType()
    {
        return $this->type;
    }
}
?>
<!-- Product erediterà da Item -->

<?php
require_once __DIR__ . "/item.php";

class Product extends Item {
    private $category;
    private $itemType;

    public function __construct($title, $price, $image, Category $category, ItemType $itemType) {
        parent::__construct($title, $price, $image);
        $this->category = $category;
        $this->itemType = $itemType;
    }

    public function getCategory() {
        return $this->category;
    }

    public function getItemType() {
        return $this->itemType;
    }
}
?>

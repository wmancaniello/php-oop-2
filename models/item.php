<?php
class Item
{
    private $title;
    private $price;
    private $image;

    public function __construct($title, $price, $image)
    {
        $this->title = $title;
        $this->price = $price;
        $this->image = $image;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getImage()
    {
        return $this->image;
    }
}

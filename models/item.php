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


    /**
     * Get the value of title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Get the value of price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Get the value of image
     */
    public function getImage()
    {
        return $this->image;
    }
}

<!-- Categorie, gatti e cani -->

<?php
class Category
{
    private $name;
    private $icon;

    public function __construct($name, $icon)
    {
        $this->name = $name;
        $this->icon = $icon;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the value of icon
     */
    public function getIcon()
    {
        return $this->icon;
    }
}

?>
<?php
class Product {
    public $title;
    public $price;
    public $imgURL;

    public function __construct($title, $price, $imgURL) {
        $this->title = $title;
        $this->price = $price;
        $this->imgURL = $imgURL;
    }
}
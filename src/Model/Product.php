<?php

// Model class of a product.
class Product
{
    var $id;
    var $name;
    var $brand;
    var $price;
    var $details;

    public function getId() {
        return $this->id;
    }

    public function setId($newId) {
        $this->id = $newId;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($newName) {
        $this->name = $newName;
    }

    public function getBrand() {
        return $this->brand;
    }

    public function setBrand($newBrand) {
        $this->brand = $newBrand;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setPrice($newPrice) {
        $this->price = $newPrice;
    }

    public function getDetails() {
        return $this->details;
    }

    public function setDetails($newDetails) {
        $this->details = $newDetails;
    }
}


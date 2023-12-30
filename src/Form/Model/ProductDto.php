<?php

namespace App\Form\Model;

use App\Entity\Product;

class ProductDto {
    public $sku;
    public $name;
    public $description;

    public function createFromProduct(Product $product) : self
    {
        $productDto = new self();
        $productDto->sku         = $product->getSku();
        $productDto->name        = $product->getName();
        $productDto->description = $product->getDescription();
        return $productDto;
    }

}
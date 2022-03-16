<?php

namespace CDC\Store\Cart;

use CDC\Store\Product\Product;
use ArrayObject;

class ShoppingCart
{
    private $products;

    public function __construct()
    {
        $this->products = new ArrayObject();
    }

    public function add(Product $product)
    {
        $this->products->append($product);

        return $this->products;
    }

    public function getProducts()    
    {
        return $this->products;
    }

    public function higherPrice()
    {
        if (count($this->getItems()) === 0) {
            return 0;
        }

        $higherPrice = $this->getProducts()[0]->getPrice();

        foreach($this->getProducts() as $product) {
            if ($higherPrice < $product->getPrice()) {
                $higherPrice = $product->getPrice();
            }
        }

        return $higherPrice;
    }
}

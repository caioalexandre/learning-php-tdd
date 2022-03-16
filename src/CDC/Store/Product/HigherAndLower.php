<?php

namespace CDC\Store\Product;

use CDC\Store\Cart\ShoppingCart;

class HigherAndLower
{
    private $lower;
    private $higher;

    public function find(ShoppingCart $shoppingCart)
    {
        foreach ($shoppingCart->getProducts() as $product) {
            if (empty($this->lower) || $product->getPrice() < $this->lower->getPrice()) {
                $this->lower = $product;
            }

            if (empty($this->higher) || $product->getPrice() > $this->higher->getPrice()) {
                $this->higher = $product;
            }
        }
    }

    public function getLower()
    {
        return $this->lower;
    }

    public function getHigher()
    {
        return $this->higher;
    }
}

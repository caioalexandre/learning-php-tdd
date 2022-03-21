<?php

namespace CDC\Store\Product;

require "./vendor/autoload.php";

use CDC\Store\Cart\ShoppingCart,
    CDC\Store\Product\Product,
    CDC\Store\Product\HigherAndLower;
use PHPUnit\Framework\TestCase as PHPUnit;

class HigherAndLowerTest extends PHPUnit
{
    public function testDescOrder()
    {
        $cart = new ShoppingCart();

        $cart->add(new Product("Geladeira", 450.00));
        $cart->add(new Product("Liquidificador", 250.00));
        $cart->add(new Product("Jogo de pratos", 70.00));

        $higherLower = new HigherAndLower();
        $higherLower->find($cart);

        $this->assertEquals(
            "Jogo de pratos",
            $higherLower->getLower()->getName()
        );

        $this->assertEquals(
            "Geladeira",
            $higherLower->getHigher()->getName()
        );
    }

    public function testJustOneProduct()
    {
        $cart = new ShoppingCart();

        $cart->add(new Product("Geladeira", 450.00));

        $higherLower = new HigherAndLower();
        $higherLower->find($cart);

        $this->assertEquals(
            "Geladeira",
            $higherLower->getLower()->getName()
        );

        $this->assertEquals(
            "Geladeira",
            $higherLower->getHigher()->getName()
        );
    }
}

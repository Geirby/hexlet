<?php
require_once('Shop\Cart.php');
require_once('Shop\Item.php');

use Shop\Cart;
use Shop\Item;
$cart = new Cart();
$cart->add(new Item(1, 'apple', 2));
$cart->add(new Item(2, "water", 2));
$cart->add(new Item(2, "water", 2));
//print_r($cart);
$cart->remove(2);
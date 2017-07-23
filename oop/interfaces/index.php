<?php
require_once('Cart.php');
require_once('Item.php');

use Shop\Cart;
use Shop\Item;

$cart = new Cart();
$cart->add(new Item(1, 'apple', 2));
$cart->add(new Item(2, "water", 2));
$cart->add(new Item(2, "water", 2));
$cart->add(new Item(2, "water", 2));

echo count($cart);
foreach ($cart as $item) {
    echo "id: " . $item->id . ", name: " . $item->name . ", price: " . $item->price . PHP_EOL;
}
//echo $cart->count();
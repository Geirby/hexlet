<?php
/*
Реализуйте в классе Shop\Cart следующие методы:

add - для добавления товаров в корзину
count - для получения количества товаров в корзине
total - для получения общей суммы товаров в корзине
remove - для удаления товара из корзины по id
clear - для очистки корзины
Пример:

use Shop\Cart;

$cart = new Cart();

$cart->add(new Item(1, "milk", 5))
$cart->add(new Item(2, "water", 2));
$cart->count(); // 2
$cart->total(); // 7
$cart->remove(2);
$cart->count(); // 1
 */

namespace Shop;

class Cart
{
    private $items = [];

    // BEGIN (write your solution here)
    public function add(Item $item)
    {
        $this->items[] = $item;
    }

    public function count()
    {
        return count($this->items);
    }

    public function total()
    {
        $totalPrice = 0;
        foreach ($this->items as $item) {
            $totalPrice += $item->price;
        }

        return $totalPrice;
    }

    public function remove($id)
    {
        $result = array_filter($this->items, function($x) use ($id) {
           if ($x->id != $id) return $x;
        });
        return $this->items = $result;
    }

    public function clear()
    {
        $this->items = [];
    }
// END
}



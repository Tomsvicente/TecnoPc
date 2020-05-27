<?php

namespace App;

class Cart
{

    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct($carritoViejo){
      if ($carritoViejo) {
        $this->items = $carritoViejo->items;
        $this->totalQty = $carritoViejo->totalQty;
        $this->totalPrice = $carritoViejo->totalPrice;
      }
    }
    public function add($item, $id){
      $itemsGuardados = ['qty' => 0, 'price' => $item->price, 'item' => $item];
      if ($this->items) {
        if (array_key_exists($id,$this->items)) {
          $itemsGuardados = $this->items[$id];
        }
      }
      $itemsGuardados['qty']++;
      $itemsGuardados['price'] = $item->price * $itemsGuardados['qty'];
      $this->items[$id] = $itemsGuardados;
      $this->totalQty++;
      $this->totalPrice += $item->price;
    }

    public function reducirUno($id){
      $this->items[$id]['qty']--;
      $this->items[$id]['price'] -= $this->items[$id]['item']['price'];
      $this->totalQty--;
      $this->totalPrice -= $this->items[$id]['item']['price'];

      if ($this->items[$id]['qty'] <= 0) {
        unset($this->items[$id]);
      }
    }

    public function removerItem($id){
      $this->totalQty -= $this->items[$id]['qty'];
      $this->totalPrice -= $this->items[$id]['item']['price'];

      unset($this->items[$id]);
    }
}

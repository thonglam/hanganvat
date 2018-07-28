<?php

namespace App;

class Cart
{
	public $items = null;
	public $totalQty = 0;
	public $totalPrice = 0;

	public function __construct($oldCart){
		if($oldCart){
			$this->items = $oldCart->items;
			$this->totalQty = $oldCart->totalQty;
			$this->totalPrice = $oldCart->totalPrice;
		}
	}

	public function add($item, $id, $quanity){
		if($item->promotion_price != 0){
			$giohang = ['qty'=>0, 'item' => $item, 'price' => $item->promotion_price];
			if($this->items){
				if(array_key_exists($id, $this->items)){
					$giohang = $this->items[$id];
				}
			}
			$giohang['qty'] = $giohang['qty'] + $quanity;
			$giohang['price'] = $item->promotion_price * $giohang['qty'];
			$this->items[$id] = $giohang;
			$this->totalQty = $this->totalQty + $quanity;
			$this->totalPrice += $item->promotion_price* $quanity ;
		}else{
			$giohang = ['qty'=>0, 'item' => $item, 'price' => $item->price];
			if($this->items){
				if(array_key_exists($id, $this->items)){
					$giohang = $this->items[$id];
				}
			}
			$giohang['qty'] = $giohang['qty'] + $quanity;
			$giohang['price'] = $item->price * $giohang['qty'];
			$this->items[$id] = $giohang;
			$this->totalQty = $this->totalQty + $quanity;
			$this->totalPrice += $item->price* $quanity ;
		}
		
	}

	public function addone($item, $id){
		if($item->promotion_price != 0){
			$giohang = ['qty'=>0, 'item' => $item, 'price' => $item->promotion_price];
			if($this->items){
				if(array_key_exists($id, $this->items)){
					$giohang = $this->items[$id];
				}
			}
			$giohang['qty']++;
			$giohang['price'] = $item->price * $giohang['qty'];
			$this->items[$id] = $giohang;
			$this->totalQty++;
			$this->totalPrice += $item->promotion_price;
		}else{
			$giohang = ['qty'=>0, 'item' => $item, 'price' => $item->price];
			if($this->items){
				if(array_key_exists($id, $this->items)){
					$giohang = $this->items[$id];
				}
			}
			$giohang['qty']++;
			$giohang['price'] = $item->price * $giohang['qty'];
			$this->items[$id] = $giohang;
			$this->totalQty++;
			$this->totalPrice += $item->price;
		}
	}

	//xóa 1
	public function reduceByOne($id){
		$this->items[$id]['qty']--;
		$this->items[$id]['price'] -= $this->items[$id]['item']['price'];
		$this->totalQty--;
		$this->totalPrice -= $this->items[$id]['item']['price'];
		if($this->items[$id]['qty']<=0){
			unset($this->items[$id]);
		}
	}
	//xóa nhiều
	public function removeItem($id){
		$this->totalQty -= $this->items[$id]['qty'];
		$this->totalPrice -= $this->items[$id]['price'];
		unset($this->items[$id]);
	}
}

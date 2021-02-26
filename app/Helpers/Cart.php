<?php
namespace App\Helpers;
class Cart{
	public $items =[];
	public function __construct(){
		$this->items = session('cart') ? session('cart') :[];
		$this->total_price = $this->get_total_price();
	}
   
    public function add($product,$quantity=1){
				if(isset($this->items[$product->id])){
					$this->items[$product->id]['quantity']+=$quantity;
				}else{
					$item=[
						'id'=>$product->id,
						'p_name'=>$product->p_name,
						'image'=>$product->image,
						'price'=>$product->sale_price ? $product->price : $product->price,
						'quantity'=>$quantity,


  ];
$this->items[$product->id]=$item;
				}		
		
session(['cart'=>$this->items]);

    } private function get_total_price()
    {
    	$t = 0;
    	foreach ($this->items as $it) {
    		$t += ($it['price']*$it['quantity']);
    	}
    	return $t;
    	
	}
	public function remove($id)
    {
    	if (isset($this->items[$id])) {
    		unset($this->items[$id]);
    	}

    	session(['cart'=>$this->items]);
    }
    public function update($id,$quantity)
    {
    	
    	if (isset($this->items[$id])) {
    		$this->items[$id]['quantity'] = $quantity;
    	}

    	session(['cart'=>$this->items]);
    }
}
?>
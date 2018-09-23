<?php
session_start();
class Cart{
    protected $cart_contents=array();
    public function __construct(){
        //get the shopping cart array from the session
        $this->cart_contents= !empty($_SESSION['cart_contents'])?$_SESSION['cart_contents']:NULL;
        if ($this->cart_contents === Null){

           $this->cart_contents=array('cart_total'=>0,'total_items'=>0);
        }
    }

    public function contents(){
        $cart=array_reverse($this->cart_contents);

        unset($cart['total_items']);
        unset($cart['cart_total']);

        return $cart;
    }

    public function get_item($row_id){
        return (in_array($row_id, array('total_items', 'cart_total'), TRUE) OR ! isset($this->cart_contents[$row_id]))
            ? FALSE
            : $this->cart_contents[$row_id];
    }
    //returns total items count
    public  function  total_items(){
        return $this->cart_contents['total_items'];
    }
    //returns total price
    public function total(){
        return $this->cart_contents['cart_total'];
    }

    //insert items into the cart and save it to the session
    public function insert($item = array()){
        if(!is_array($item) OR count($item)=== 0){
            return FALSE;
        }else{
            if(!isset($item['id'],$item['product_name'],$item['price'],$item['qty'])){
                return FALSE;
            }else{
                //prepares quantity
                $item['qty']=(float) $item['qty'];
                if($item['qty']== 0){
                    return FALSE;
                }
                //prepares price
                $item['price']=(float) $item['price'];
//creates a unique identifier of item being inserted into the cart
                $rowid=md5($item['id']);

                $old_qty=isset($this->cart_contents[$rowid]['qty'])? (int)$this->cart_contents[$rowid]['qty']:0;

                $item['rowid']=$rowid;
                $item['qty']+=$old_qty;
                $this->cart_contents[$rowid]=$item;
                //save cart item
                if($this->save_cart()){
                    return isset($rowid)? $rowid :TRUE;
                }
                else{
                    return FALSE;
                }
            }
        }

    }
    //update the cart
    public function update($item =array()){
        if(!is_array($item) OR count($item)===0){
            return FALSE;
        }
        else{
            if(!isset($item['rowid'], $this->cart_contents[$item['rowid']])){
                return FALSE;
            }
            else{
                //prepares quantity
                if(isset($item['qty'])){
                    $item['qty']=(float)$item['qty'];

                    //remove item from cart if quantity is zero
                    if($item['qty']==0){
                        unset($this->cart_contents[$item['rowid']]);
                        return TRUE;
                    }
                }
                //find updatable key
                $keys=array_intersect(array_keys($this->cart_contents[$item['rowid']]), array_keys($item));
                //prepare the price
                if(isset($item['price'])){
                    $item['price']= (float) $item['price'];
                }

                foreach(array_diff($keys, array('id','product_name')) as $key){
                    $this->cart_contents[$item['rowid']][$key]=$item[$key];
                }
                //save cart data
                $this->save_cart();
                return TRUE;
            }
        }
    }
    //save the cart array to the session

    protected function save_cart(){
        $this->cart_contents['total_items']=$this->cart_contents['cart_total']=0;
        foreach ($this->cart_contents as $key=> $val){
            if(!is_array($val) OR !isset($val['price'], $val['qty'])){
                continue;
            }

            $this->cart_contents['cart_total']+=($val['price']* $val['qty']);

            $this->cart_contents['total_items'] +=$val['qty'];

            $this->cart_contents[$key]['subtotal']= ($this->cart_contents[$key]['price'] * $this->cart_contents[$key]['qty']);
        }
        //if cart empty delete it from session
        if(count($this->cart_contents)<= 2){
            unset($_SESSION['cart_contents']);
            return FALSE;
        }else{
            $_SESSION['cart_contents']= $this->cart_contents;
            return TRUE;
        }
    }
    //removes item from the cart

    public function remove($row_id){
        //unset and save
        unset($this->cart_contents[$row_id]);
        $this->save_cart();
        return TRUE;
    }
    //destroy the cart: empties cart and destroy the session
    public function destroy(){
        $this->cart_contents = array('cart_total'=>0, 'total_items'=> 0);
        unset($_SESSION['cart_contents']);
    }
}

?>
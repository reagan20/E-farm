<?php
//initialise shopping cart class
include 'Cart.php';
$cart=new Cart;
//includes database
include 'config/dbconnect.php';
if(isset($_REQUEST['action']) && !empty($_REQUEST['action'])){
    if($_REQUEST['action'] == 'addToCart' && !empty($_REQUEST['id'])){
        $productid=$_REQUEST['id'];
        //get product details
        $query=$conn->query("SELECT * FROM products WHERE id=".$productid);
        $row=$query->fetch_assoc();
        $itemData=array(
            'id' =>$row['id'],
            'product_name' =>$row['product_name'],
            'price' =>$row['price'],
            'qty' =>1
        );
        $insertItem = $cart->insert($itemData);
        $redirectLoc = $insertItem?'viewCart':'index';
        header("Location:".$redirectLoc);
    }elseif($_REQUEST['action'] == 'updateCartItem' && !empty($_REQUEST['id'])){
        $itemData=array('rowid' => $_REQUEST['id'], 'qty'=> $_REQUEST['qty']);

        $updateItem= $cart->update($itemData);
        echo $updateItem?'ok':'err';
        die;
    }elseif($_REQUEST['action'] =='removeCartItem' && !empty($_REQUEST['id'])){
        $deleteItem=$cart->remove($_REQUEST['id']);
        header("Location: viewCart");
    }elseif($_REQUEST['action'] == 'placeOrder' && $cart->total_items()>0 && !empty($_SESSION['customer'])){
        //insert order details into database
        /*$insertOrder= $conn->query("INSERT INTO orders (customer_id,total_price)
VALUES ('".$_SESSION['sessCustomerID']."', '".$cart->total()."')");*/
        $status="Pending";
        $insertOrder= $conn->query("INSERT INTO orders (customer_id,total_price,status,modified)
VALUES ('".$_SESSION['customer']."', '".$cart->total()."','".$status."','".date("Y-m-d H:i:s")."')");

        if($insertOrder){
            $orderID = $conn->insert_id;
            $sql= '';
            //get cart items
            $cartItems= $cart->contents();
            foreach($cartItems as $item){
                $sql .="INSERT INTO order_items(order_id,product_id,quantity) VALUES ('".$orderID."','".$item['id']."','".$item['qty']."');";
            }
            //insert order items into database
            $insertOrderItems = $conn->multi_query($sql);
            if($insertOrderItems){
                $cart->destroy();
                header("Location: orderSuccess?id=$orderID");
            }else{
                header("Location: checkout");
            }
        }
        else{
            header("Location: checkout");
        }
    }else{
        header("Location: index");
    }
}else{
    header("Location: index");
}
?>
<?php
require_once 'controllers/ShoppingCartController.php';

$c = new ShoppingCartController;
if( isset($_POST['id']) && 
    isset($_POST['action']) && 
    $_POST['action']=='add' 
){
    $id = $_POST['id'];
    return $c->addToCart($id);
}
if(isset($_POST['id']) && isset($_POST['action']) && $_POST['action']=='delete' ){
    //delete cart
    return $c->deleteCart();
}

?>
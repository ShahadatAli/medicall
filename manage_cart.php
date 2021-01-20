<?php
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST['add_to_cart'])){
        if(isset($_SESSION['cart'])){
            
        }
        else{
            $_SESSION['cart'][0]=array('Item_Name'=>$_POST['Item_Name'],Price)
            
        }
    }
}

?>
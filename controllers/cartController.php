<?php
   
     // var_dump($_SESSION["arrCart"]);
    // echo $_GET['id'];
   
    class cartController 
    {
        
        public function addToCart() {
            // $_SESSION['id'] = $_GET['id'];
            $arrCart= Product::getProductById($_GET["id"]);
            /* I know these are the variables I'm looking for to add to my cart*/
            // var_dump($arrCart);
         echo $arrCart->id .'<br>';
            echo $arrCart->name .'<br>';
            echo $arrCart->price .'<br>';
            echo $arrCart->image .'<br>';
            // echo $_SESSION['arrCart']->image;
            $qty = $_GET['qty'];
             $arrCartItems = Cart::addToCart($arrCart->id, $arrCart->name, $arrCart->image, $arrCart->price, $qty);
             var_dump($arrCartItems);
             include("views/productdet.php"); 
        } 
        public function cartCount() {
            // $_SESSION['id'] = $_GET['id'];
            // $arrCart = product::getProductById($_GET["id"]);
                 
        } 
        
    }
?>
      
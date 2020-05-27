<?php
    class Cart 
    {
        //Create an empty array to receive cart items 
        public $arrCartItems = array();

        // make a construct function that saves the cart session immediately the function is called
        public function __construct (){
            // if there's a session already, equate the cartItems to the session
            if(isset($_SESSION["arrCart"])){
                $this->arrCartItems = $_SESSION["arrCart"];
            }
        }

        public function saveCart()
        {
            $oCart = new Cart();
            $_SESSION["arrCart"] = $oCart->arrCartItems;
        }

        public static function addToCart($id, $name, $image, $price, $qty)
        {
            //instantiate the class
            $oCart = new Cart();
            
            if(isset($oCart->arrCartItems[$id]))
            {
                //If I already have a saved session id, override the qty of whatever id I just passed in 
                $oCart->arrCartItems[$id]['qty']= $oCart->arrCartItems[$id]['qty'] + $qty;
            } else {
                $oCart->arrCartItems[$id] = array("id"=>$id, "name"=>$name, "image"=>$image, "price"=>$price, "qty"=>$qty);
            }
        
              $oCart->saveCart();
            // var_dump($_SESSION["arrCart"]);       
        }

        public static function emptyCart()
        {
            //set cart items back to an empty array
            $this->arrCartContents = array();
            $_SESSION["arrCart"] = $this->arrCartContents;
        }
        public static function cartItemCount()
        {
            // set the default qty to 0
            $qty = 0; 
            foreach($this->arrCartContents as $item)
            {
                // incremenet qty + number of qty for this item
                $qty = $qty + $item["qty"];
            }

            return $qty;
        }
    }
?>
      
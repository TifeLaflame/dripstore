<?php
    class Product 
    {
        public $id;
        public $name; 
        public $image; 
        public $price; 
        public $desc;
        public $genderId;
        public $productPhotos;
        public $productVariants;
        /* This is the constructor which gets called when you create a product. IE. new Product(...)
        It expects 6 paramaters to be passed into the new Product call. If you don't pass in 6, you'll get an error
        */
        public function __construct($id, $name, $image, $price, $desc, $genderId, $arrPhotos, $pVariants)
        {
            /* Take the 6 parameters and assign them into object properties */
            $this->id = $id;
            $this->name = $name;
            $this->image = $image; 
            $this->price = $price;
            $this->desc = $desc;
            $this->genderId = $genderId;
            $this->productPhotos = $arrPhotos;
            $this->productVariants = $pVariants;
        }
      
        public static function getProductPhotos($id) 
        {   
            $arrProductImgs = DbCon::fetchData("SELECT * FROM otherImages WHERE nProductId ='".$id."'");
            return $arrProductImgs;
        }
        // products.id, products.strName, products.strCoverImage, products.nPrice, products.strDesc, genders.strGender FROM products LEFT JOIN genders ON products.nGendersID = genders.id"
        public static function getProductVariants($id) 
        {
            $arrProductV = DbCon::fetchData("SELECT productvariants.id, productvariants.nProductId, productvariants.nQty, sizes.strSName FROM productvariants LEFT JOIN sizes ON productvariants.nSizeId = sizes.id WHERE nProductId='".$id."'");
            
            return $arrProductV;
        }

        public static function getProductById($id)
        {
         
            $arrProducts = DbCon::fetchData("SELECT * FROM products WHERE id='".$id."'");
            $product = $arrProducts[0]; 
            // var_dump($product);  
            /* 
            $this->productphotos= getProductPhotos(); */
            $oProduct = new Product($product['id'], $product['strName'], $product['strCoverImage'], $product['nPrice'] , $product['strDesc'], $product['nGendersID'], Product::getProductPhotos($id), Product::getProductVariants($id));
            
            // var_dump($oProduct);  
            return $oProduct;      
        } 
        
    }
?> 
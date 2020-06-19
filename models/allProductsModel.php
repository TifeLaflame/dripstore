<?php
    class AllProducts 
    {
       
        public static function getAllProducts()
        {
            $arrProducts = DbCon::fetchData("SELECT products.id, products.strName, products.strCoverImage, products.nPrice, products.strDesc, genders.strGender FROM products LEFT JOIN genders ON products.nGendersID = genders.id");
            //we have to loop over the object array to get all the info 
            foreach ($arrProducts as $product) 
            {
                $oProduct = new Product($product['id'], $product['strName'], $product['strCoverImage'], $product['nPrice'], $product['strDesc'], $product['strGender'], Product::getProductPhotos($product['id']), Product::getProductVariants($product['id']));

                $arrOProducts[] = $oProduct;
            }
            return $arrOProducts;
        }
        public static function getFeatured()
        {
            $arrProducts = DbCon::fetchData("SELECT products.id, products.strName, products.strCoverImage, products.nPrice, products.strDesc, genders.strGender FROM products LEFT JOIN genders ON products.nGendersID = genders.id WHERE bFeatured = 1");
            
            //we have to loop over the object array to get all the info 
            foreach ($arrProducts as $product) 
            {
                $oProduct = new Product($product['id'], $product['strName'], $product['strCoverImage'], $product['nPrice'], $product['strDesc'], $product['strGender'], Product::getProductPhotos($product['id']), Product::getProductVariants($product['id']));

                $arrOProducts[] = $oProduct;
            }
            // var_dump($arrOProducts);
            return $arrOProducts;
            
        }
        public static function getByGender($gId)
        {
            $arrProducts = DbCon::fetchData("SELECT products.id, products.strName, products.strCoverImage, products.nPrice, products.strDesc, genders.strGender FROM products LEFT JOIN genders ON products.nGendersID = genders.id WHERE products.nGendersID= '".$gId."'");
            foreach ($arrProducts as $product) 
            {

                $oProduct = new Product($product['id'], $product['strName'], $product['strCoverImage'], $product['nPrice'], $product['strDesc'], $product['strGender'], Product::getProductPhotos($product['id']), Product::getProductVariants($product['id']));
                
                $arrOProducts[] = $oProduct;
                 
            }
            //
            // var_dump($arrOProducts);
            return $arrOProducts; 
        }
    }
?>
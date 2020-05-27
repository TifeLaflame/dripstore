<?php
    class Pages extends Controller
    {
        public function loadView($name, $data="")
        {
            //this method needs to load the include file and save it 
            //into a variable
            ob_start();
            //don't push content  yet 
            include($name);
            //receive content in a variable 
            $htmlFromInclude = ob_get_contents(); 
            //clear content
            ob_clean();

            return $htmlFromInclude;
        }

        public function home()
        {
           
            $message = "Home Page";
            //$news = include("views/Default.php");
            $arrCategories = Category::fetchAllInfo();
            $arrFeatured = AllProducts::getFeatured();
            // var_dump($arrFeatured);      
            // var_dump($arrCategories);
            include("views/default.php");
        }

        public function products()
        {
            $message = "Products Page";
            $arrAllProducts = AllProducts::getAllProducts();
            $arrByGender = AllProducts::getByGender($_GET['gId']);
            //var_dump($arrByGender); 
            include("views/products.php");
        }

        public function productdet()
        {
            $message = "Product Details Page";
            $arrProduct = Product::getProductById($_GET['id']);
            // var_dump($arrProduct);
            include("views/productdet.php");
        }
        
        public function doLogin()
        {
            header("location:index.php?action=home");
        }
        
        public function getErrorMsg()
        {
            echo "No route by that name";
        }
        public function contact()
        {
            $message = "Contact Page";
            $arrNews = News::getNews();
            $news = $this->loadView("views/footerNews.php", $arrNews);
            include("views/contact.php");
        }
        
    }
?>
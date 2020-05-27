<?php
//this file was created in case you only need to get the footer news
//in maybe json output
    class ApiNews extends Controller 
    {
        public function getNewsItems()
        {
            $data = News::getNews();
            
            include("views/json_output.php");
        }
        public function getNavsItems()
        {
            $data = Nav::getNavItems();
            
            include("views/json_output.php");
        }
        public function getErrorMsg()
        {
            echo "No route by that name";
        }

    }
?>
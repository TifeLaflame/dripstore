<?php 
    class Category {
        public $id;
        public $categoryName;

        public function __construct($id, $categoryName)
        {
            $this->id = $id;
            $this->categoryName =$categoryName; 
        }
        public static function findByCategoryId($id)
        {
            $arrCategories = DbCon::fetchData("SELECT * FROM categories WHERE id='".$id."'");
            $category = $arrCategories[0];
            $oCategory = new Category($category['id'], $category['strCategory']);
        
            var_dump($oCategory);
            return $oCategory;
        }
        public static function fetchAllInfo()
        {
            $arrCategories = DbCon::fetchData("SELECT * FROM categories");

            //for loop to get all info
            foreach($arrCategories as $category)
            {
                //instantiate 
                $oCategory = new Category($category['id'], $category['strCategory']);

                //an empty array receives the object
                $arrOCategories[]=$oCategory;
            }
            //an object is returned 
            return $arrOCategories;
            //always return an object
        }

        
    }
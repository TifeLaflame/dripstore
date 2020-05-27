<?php 
    class Categories {
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

        public static function getFiltered($whichId)
        {
            DbCon::fetchData("SELECT * FROM categories WHERE id='".$id."' LEFT JOIN products ON categories WHERE products.nCategoryID = categories.id");
        }
}
<?php
    class News 
    {
        public $id;
        public $name;

        public function __construct($id, $name)
       {
           $this->id =$id;
           $this->name = $name;
       }
        public static function getNews()
        { 
            $arrData = DbCon::getData("SELECT * FROM newsitems");
            
            foreach($arrData as $newItem)
            {
                $oNewsData = new News($newItem['id'], $newItem['strName']);

                $arrONewsData[] = $oNewsData;
            }
            return $arrONewsData;
        }
    }
?>
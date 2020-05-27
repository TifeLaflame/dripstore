<?php
session_start();
//include the model file before the controller because 
//you will use it in the controller class
    include('libs/dbCon.php');
    include('models/productModel.php');
    include('models/allProductsModel.php');
    include('models/categoryModel.php');
    include('models/cartModel.php');
    include('controllers/controller.php');
    include('controllers/pageController.php');
    include('controllers/cartController.php');

    $action = $_GET["action"];
    $controller = ucfirst($_GET["controller"]);
    //we always want to check if a method exists before we do something with it

    $oController = new $controller();
    if(method_exists($oController, $action))
    {
        $oController->$action();
    } else 
    {
        $oController->getErrorMsg();
    }

?>
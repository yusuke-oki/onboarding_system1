<?php
require_once "../models/forms/Product_form.php";

class Product_register_controller
{
    public function product_register_btn_access()
    {
        if(!isset($_SESSION))
        {
            session_start();
        };
        
        function show_product_register()
        {
            ob_start();
            require_once "../views/product_register.php";
            $view_product_register = ob_get_contents();
            ob_end_clean();
            echo $view_product_register;
        }
        show_product_register();
    }
}
$product_register_controller_object = new Product_register_controller;
$product_register_controller_object->product_register_btn_access();
?>
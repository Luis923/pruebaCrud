<?php
    require "config.php";
    $page = "index";
    if(isset($_GET['page']))
        $page = $_GET['page'];
    switch($page){
        case 'productos':
            require "controlador/ProductoController.php";
            if(isset($_GET['opcion'])):
                $metodo = $_GET['opcion'];
                if(method_exists('ProductoController',$metodo)):
                    ProductoController::{$metodo}();
                endif;
            else:
                ProductoController::form_welcome();
            endif;
            break;
        case 'categorias':
            require "controlador/CategoriaController.php";
            if(isset($_GET['opcion'])):
                $metodo = $_GET['opcion'];
                if(method_exists('CategoriaController',$metodo)):
                    CategoriaController::{$metodo}();
                endif;
            else:
                CategoriaController::form_welcome();
            endif;
            break;
        default:
            require "controlador/IndexController.php";
            IndexController::index();
            break; 
    }

?>
<?php
require "modelo/categoria.php";
class CategoriaController{
    public static function form_welcome(){
        require "vista/categoria/welcome.php";
    }
    public static function form_insertar(){
        require "vista/categoria/insertar.php";
    }
    public static function form_mostrar(){
        $categoria = new Categoria();
        $datos = $categoria->buscar();
        require "vista/categoria/mostrar.php";
    }
    public static function form_modificar(){
        require "vista/categoria/modificar.php";
    }
    public static function form_eliminar(){
        require "vista/categoria/eliminar.php";
    }

    public static function insertar(){
        $_nombre= $_REQUEST['txtnombre'];

        $categoria = new Categoria();
        $data       = [$_nombre];
        $accion     = $categoria->insertar($data);
        
        if($accion){
            header('location:'.urlsite."?page=categorias&opcion=form_insertar");
        }
        else
            header('location:'.urlsite."?page=categorias&opcion=form_insertar&msg=No se pudo insertar");
    }

    public static function modificar(){
        $_nombre = $_REQUEST['txtnombre'];
        $_nuevonombre = $_REQUEST['txtnuevonombre'];

        $categoria = new Categoria();
        $data      = [$_nombre,$_nuevonombre];
        $accion    = $categoria->modificar($data);

        if($accion){
            header('location:'.urlsite."?page=categorias&opcion=form_modificar");
        }
        else{
            header('location:'.urlsite."?page=categorias&opcion=form_modificar&msg=No se pudo modificar");
        }
    }
    public static function eliminar(){
        $_nombre = $_REQUEST['txtnombre'];
        $categoria = new Categoria();
        $data   = [$_nombre];
        $accion = $categoria->eliminar($data);
        if($accion){
            header('location:'.urlsite."?page=categorias&opcion=form_eliminar");
        }
        else{
            header('location:'.urlsite."?page=categorias&opcion=form_eliminar&msg=No se pudo modificar");
        }
    }  
}           
?>
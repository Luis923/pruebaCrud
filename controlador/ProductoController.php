<?php
require "modelo/producto.php";
class ProductoController{
    public static function form_welcome(){
        require "vista/producto/welcome.php";
    }
    public static function form_insertar(){
        require "vista/producto/insertar.php";
    }
    public static function form_mostrar(){
        $producto = new Producto();
        $datos = $producto->buscar();
        require "vista/producto/mostrar.php";
    }
    public static function form_buscarProducto(){
        require "vista/producto/buscarProducto.php";
    }
    public static function form_modificar(){
        require "vista/producto/modificar.php";
    }
    public static function form_eliminar(){
        require "vista/producto/eliminar.php";
    }

    public static function insertar(){
        $_nombre= $_REQUEST['txtnombre'];
        $_grado = $_REQUEST['txtgrado'];    
        $_cantidad = $_REQUEST['txtcantidad'];
        $_categoria = $_REQUEST['txtcategoria'];

        $producto = new Producto();
        $data       = [$_nombre,$_grado,$_cantidad,$_categoria];
        $accion     = $producto->insertar($data);
        
        if($accion){
            header('location:'.urlsite."?page=productos&opcion=form_insertar");
        }
        else
            header('location:'.urlsite."?page=productos&opcion=form_insertar&msg=No se pudo insertar");
    }
    public static function buscarProducto(){
        $_producto = $_REQUEST['txtproducto'];
        $producto = new Producto();
        $datos   = [$_producto];
        $data = $producto->buscarProducto($datos);
        require "vista/producto/modificar.php";
    }
    public static function modificar(){
        $_nombre= $_REQUEST['txtnombre'];
        $_grado = $_REQUEST['txtgrado'];    
        $_cantidad = $_REQUEST['txtcantidad'];
        $_categoria = $_REQUEST['txtcategoria'];
        $_idproducto = $_REQUEST['txtidproducto'];

        $producto = new Producto();
        $data      = [$_nombre,$_grado,$_cantidad,$_categoria,$_idproducto];
        $accion    = $producto->modificar($data);
        if($accion){
            header('location:'.urlsite."?page=productos&opcion=form_buscarProducto");
        }
        else{
            header('location:'.urlsite."?page=productos&opcion=form_buscarProducto&msg=No se pudo modificar");
        }
    }
    public static function eliminar(){
        $_producto = $_REQUEST['txtproducto'];
        $producto = new Producto();
        $data   = [$_producto];
        $accion = $producto->eliminar($data);
        if($accion){
            header('location:'.urlsite."?page=productos&opcion=form_eliminar");
        }
        else{
            header('location:'.urlsite."?page=productos&opcion=form_eliminar&msg=No se pudo modificar");
        }
    }
}           
?>
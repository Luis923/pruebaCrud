<?php
    require "modelo/conexion.php";
    class Producto{
        private $_db;
        public function __construct(){
            $this->_db = new Conexion();
        }
        public function buscar(){
            $this->_db->conectar();
            $consulta = $this->_db->conexion->prepare("SELECT *FROM productos INNER JOIN categorias WHERE productos.idcategoria = categorias.idcategoria");
            $consulta -> execute();
            while($row=$consulta ->fetch(PDO::FETCH_OBJ)){
                $this->lista[]= $row;
            }
            $this->_db->desconectar();
            return $this->lista;
        }
        public function insertar($data){  
            $this->_db->conectar();
            $consulta = $this->_db->conexion->query("SELECT *FROM  categorias WHERE categoria = '$data[3]'");
            $consulta -> execute();
            $row=$consulta ->fetch(PDO::FETCH_OBJ);
            $this->_db->desconectar();
            
            $this->_db->conectar();
            $consulta2 = $this->_db->conexion->query("INSERT productos VALUES(default,'$data[0]','$data[1]','$data[2]','$row->idcategoria')");
            $this->_db->desconectar();
            if($consulta2)
                return true;
            else   
                return false;
        }
        public function buscarProducto($datos){
            $this->_db->conectar();
            $consulta = $this->_db->conexion->prepare("SELECT *FROM productos WHERE nombre = '$datos[0]'");
            $consulta -> execute();
            while($row=$consulta ->fetch(PDO::FETCH_OBJ)){
                $this->lista[]= $row;
            }
            $this->_db->desconectar();
            return $this->lista;
        }
        public function modificar($data){
            $this->_db->conectar();
            $consulta = $this->_db->conexion->query("SELECT *FROM  categorias WHERE categoria = '$data[3]'");
            $consulta -> execute();
            $row=$consulta ->fetch(PDO::FETCH_OBJ);

            $this->_db->desconectar();
            $this->_db->conectar();
            $consulta = $this->_db->conexion->query("UPDATE productos SET nombre= '$data[0]', grado= '$data[1]', cantidad= '$data[2]', categoria= '$row->idcategoria'  WHERE idproducto='$data[4]'");
            $this->_db->desconectar();
            if($consulta)
                return true;
            else   
                return false;
        }
        public function eliminar($data){
            $this->_db->conectar();
            $consulta = $this->_db->conexion->query("DELETE FROM productos WHERE nombre='$data[0]'");
            $this->_db->desconectar();
            if($consulta)
                return true;
            else   
                return false;
        }
    }
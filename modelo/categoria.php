<?php
    require "modelo/conexion.php";
    class Categoria{
        private $_db;
        public function __construct(){
            $this->_db = new Conexion();
        }
        public function buscar(){
            $this->_db->conectar();
            $consulta = $this->_db->conexion->prepare("SELECT *FROM categorias");
            $consulta -> execute();
            while($row=$consulta ->fetch(PDO::FETCH_OBJ)){
                $this->lista[]= $row;
            }
            $this->_db->desconectar();
            return $this->lista;
        }
        public function insertar($data){   
            $this->_db->conectar();
            $consulta = $this->_db->conexion->query("INSERT categorias VALUES(default,'$data[0]')");
            $this->_db->desconectar();
            if($consulta)
                return true;
            else   
                return false;
        }
        public function obtenerCategorias(){
            $this->_db->conectar();
            $consulta = $this->_db->conexion->prepare("SELECT *FROM categorias");
            $consulta -> execute();
            while($row=$consulta ->fetch(PDO::FETCH_OBJ)){
                $this->lista[]= $row;
            }
            $this->_db->desconectar();
            return $this->lista;
        }
        public function modificar($data){
            $this->_db->conectar();
            $consulta = $this->_db->conexion->query("UPDATE categorias SET categoria= '$data[1]' WHERE categoria='$data[0]'");
            $this->_db->desconectar();
            if($consulta)
                return true;
            else   
                return false;
        }
        public function eliminar($data){
            $this->_db->conectar();
            $consulta = $this->_db->conexion->query("DELETE FROM categorias WHERE categoria='$data[0]'");
            $this->_db->desconectar();
            if($consulta)
                return true;
            else   
                return false;
        }


    }
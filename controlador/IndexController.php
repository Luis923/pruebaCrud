<?php
    session_start();
    class IndexController{
        public function index(){
            require "vista/formIndex.php";
        }
    }
?>
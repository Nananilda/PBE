<?php
    function conectar(){
        $con = mysqli_connect("localhost", "root", "123456", "bd_loja_mvc", 3307);
        //if (!$con){
          //  die("erro na conexão com o banco!");
        //}  
        return $con;
    }

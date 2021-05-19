<?php
    $serverName = "localhost";
    $ConecctionInfo = array("Database"=>"bodega", "UID"=>"root", "PWD"=>"root", "characterSet"=> "UTF-8");
    $con = sqlsrv_connect($serverName, $ConecctionInfo);
    if($con){
        echo "conextion exitosa";
    }else{
        echo "conexion fallida";
    }

?>
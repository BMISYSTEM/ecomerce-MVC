<?php

function conectardb() : mysqli{
    $db = new mysqli('localhost','root','Atenea.99','bienesraices_crud');
    if(!$db){
        echo "error de conexion";
        exit;
    }
    return $db;
}
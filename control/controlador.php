<?php

namespace controllers;
use Router\Router;
use model\propiedad;
class controlador{
    public static function index(router $router)
    {   
        $propiedades = propiedad::get(3);
        $resultado = null;
        $router->render('propiedades/admin',[
            'propiedades' => $propiedades, 
            'resultado' => $resultado
        ]);
    }
    public static function create()
    {   
        echo "create";
    }
    public static function actualizar()
    {   
        echo "actualizar";
    }
}
?>
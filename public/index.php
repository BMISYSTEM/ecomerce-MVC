<?php 
require_once __DIR__ . '/../includes/app.php';
use router\Router;
use controllers\controlador;
$router = new Router();
//se define las rutas de aceso y su funcion
$router->get('/admin',[controlador::class,'index']);
$router->get('/propiedades/crear',[controlador::class,'create']);
$router->get('/propiedades/actualizar',[controlador::class,'actualizar']);
$router->comprobar_rutas(); 
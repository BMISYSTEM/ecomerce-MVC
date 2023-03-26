<?php 
require_once __DIR__ . '/../includes/app.php';
use router\Router;
use controllers\controlador;
use controllers\controlVendedor;
use controllers\paginascontrol;
use controllers\login;

$router = new Router();
//se define las rutas de aceso y su funcion propiedades
$router->get('/admin',[controlador::class,'index']);
$router->post('/admin',[controlador::class,'delete']);
$router->get('/admin/propiedades/crear',[controlador::class,'crear']);
$router->post('/admin/propiedades/crear',[controlador::class,'crear']);
$router->get('/admin/propiedades/actualizar',[controlador::class,'actualizar']);
$router->post('/admin/propiedades/actualizar',[controlador::class,'actualizar']);
//rutas  de vendedores
$router->get('/admin/vendedores/crear',[controlVendedor::class,'crear']);
$router->post('/admin/vendedores/crear',[controlVendedor::class,'crear']);
$router->get('/admin/vendedores/actualizar',[controlVendedor::class,'update']);
$router->post('/admin/vendedores/actualizar',[controlVendedor::class,'update']);
$router->post('/admin/vendedores/eliminar',[controlVendedor::class,'deletes']);
//visitantes
$router->get('/',[paginascontrol::class,'index']);
$router->get('/nosotros',[paginascontrol::class,'nosotros']);
$router->get('/anuncios',[paginascontrol::class,'anuncios']);
$router->get('/anuncio',[paginascontrol::class,'anuncio']);
$router->get('/blog',[paginascontrol::class,'blog']);
$router->get('/contacto',[paginascontrol::class,'contacto']);
$router->post('/contacto',[paginascontrol::class,'contacto']);
//lOGIN
$router->get('/login',[login::class,'login']);
$router->post('/login',[login::class,'login']);
$router->get('/logout',[login::class,'logaut']);
$router->comprobar_rutas(); 
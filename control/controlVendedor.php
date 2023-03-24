<?php 
namespace controllers;
use model;
use Router\Router;
use model\propiedad;
use model\vendedores;

class controlVendedor{
    public static function crear(router $router){
        $errores = vendedores::getErrores();
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $vendedor = new vendedores($_POST['vendedor']);
            $errores = $vendedor->validar();
            if(empty($errores)){
                $vendedor->guardar();
            }
        }
        $router->render('vendedores/crear',[
            'errores' => $errores,
            'vendedor' => $vendedor
        ]);
    }
    public static function update(router $router){
        $id = urlcomprobation('/admin');
        $vendedor = vendedores::find($id);
        $errores = vendedores::getErrores();
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $vendedor->sincronizar($_POST['vendedor']);
            $errores = $vendedor->validar();
            if (empty($errores)) {
                $vendedor->guardar();
            }
        }
        $router->render('vendedores/actualizar',[
            'vendedor'=> $vendedor,
            'errores' => $errores
        ]);
    }
    public static function deletes(){
        //eliminar vendedor
        
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $id = $_POST['id'];
  
            if (!is_null($id)) {
                $tipo = $_POST['tipo'];
                if(validar_contenido($tipo)){
                    if($tipo === "vendedor"){
                        $vendedor = vendedores::find($id);
                        $vendedor->delete();
                        //eliminar imagen 
                    }
                }
            }
        }
    }
    
}
?>
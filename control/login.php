<?php
namespace controllers;
use Router\Router;
use model\logins;
class login{

    public static function login(Router $router){
        // $errores =[];
        // $pass = password_hash('12345',PASSWORD_BCRYPT);
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            // debugear($_POST);
            $utentic = new logins($_POST);
            $errores = $utentic->validar();
            if(empty($errores)){
                //verificar si el usuario existe
                $resultado = $utentic->exits();
                if (!$resultado) {
                    $errores[] = logins::getErrores();
                }else{
                    //verificar pass
                    $autenticado = $utentic->password($resultado);
                    //autenticar usuario
                    if($autenticado){
                        $utentic->autenticado();
                    }else{
                        $errores[] = logins::getErrores();
                        // debugear($errores);
                    }
                }
            }
        }
        $router->render('login/login',[
            'errores' => $errores,
            'autenticado' => $utentic
            
        ]);
    }
    public static function logaut(Router $router){
            session_start();
            $_SESSION = [];
            header('Location: /');
        }
}



?>
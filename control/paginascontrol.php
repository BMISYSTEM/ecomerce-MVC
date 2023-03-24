<?php
namespace controllers;
use model;
use Router\Router;
use model\propiedad;
use model\vendedores;
use PHPMailer\PHPMailer\PHPMailer;

class paginascontrol{
    public static function index(router $router){
      $propiedades = propiedad::get(3);
      $router->render('paginas/index',[
        'propiedades' => $propiedades,
        'inicio' => true
      ]);
    }
    public static function nosotros(router $router){
      $router->render('paginas/nosotros',[
        
      ]);
    }
    public static function anuncios(router $router){
      $propiedades = propiedad::all();
      $router->render('paginas/anuncios',[
        'propiedades' => $propiedades
      ]);
    }
    public static function anuncio(router $router){
      $id = urlcomprobation('/');
      $propiedad = propiedad::find($id);
      
      $router->render('paginas/anuncio',[
        'propiedades' => $propiedad
      ]);
    }
    public static function blog(router $router){
      $router->render('paginas/blog',[
        
      ]);
    }
    public static function contacto(router $router){
      if($_SERVER['REQUEST_METHOD'] === 'POST'){
        //crear un objecto de mailer 
          $mail = new PHPMailer();
          //configurar protocolo mtp
           $mail->isSMTP();
           $mail->Host= 'sandbox.smtp.mailtrap.io';
           $mail->SMTPAuth = true;
           $mail->Username = '809ffd412427f7';
           $mail->Password = 'ff04372bd87557';
           $mail->SMTPSecure = 'tls';
           $mail->Port = 2525;

           //contenido del email

           $mail->setFrom('admin@bienesraices.com');
           $mail->addAddress('admin@bienesraices.com','bienesraices.com');
           $mail->Subject = 'tienes un nuevo mensaje';
           //html del cuerpo
           $mail->isHTML(true);
           $mail->CharSet = 'UTF-8';

           //definir contenido
           $contenido = '<html><p>Tienes un mensaje nuevo</p></html>';
            $mail->Body = $contenido;
            $mail->AltBody = 'esto es texto alternativo html';
           //enviar el imail
           if($mail->send()){
            echo "enviado correctamente";
           }else{
            echo "no se envio el mensaje";
           }

      }
      $router->render('paginas/contacto',[
        
      ]);
    }
}
?>
<html lang="es" class="add-scroll html-root">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title>Bienvenidos a Delifesta</title>
  <link rel="apple-touch-icon" sizes="120x120" href="img/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="img/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="img/favicons/favicon-16x16.png">
  <link rel="manifest" href="img/favicons/manifest.json">
  <link rel="mask-icon" hasdref="img/favicons/safari-pinned-tab.svg" color="#5bbad5">
  <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Google+Sans">
  <link rel="stylesheet" href="all.css">
  <meta name="theme-color" content="#ffffff">
  <meta name="format-detection" content="telephone=no">
  <style type="text/css">.gm-control-active>img{box-sizing:content-box;display:none;left:50%;pointer-events:none;position:absolute;top:50%;transform:translate(-50%,-50%)}.gm-control-active>img:nth-child(1){display:block}.gm-control-active:hover>img:nth-child(1),.gm-control-active:active>img:nth-child(1){display:none}.gm-control-active:hover>img:nth-child(2),.gm-control-active:active>img:nth-child(3){display:block}
  </style>
  <style type="text/css">.gm-ui-hover-effect{opacity:.6}.gm-ui-hover-effect:hover{opacity:1}
  </style>
  <style type="text/css">.gm-style .gm-style-cc span,.gm-style .gm-style-cc a,.gm-style .gm-style-mtc div{font-size:10px;box-sizing:border-box}
  </style>
  <style type="text/css">@media print {  .gm-style .gmnoprint, .gmnoprint {    display:none  }}@media screen {  .gm-style .gmnoscreen, .gmnoscreen {    display:none  }}</style><style type="text/css">.gm-style-pbc{transition:opacity ease-in-out;background-color:rgba(0,0,0,0.45);text-align:center}.gm-style-pbt{font-size:22px;color:white;font-family:Roboto,Arial,sans-serif;position:relative;margin:0;top:50%;-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%);transform:translateY(-50%)}
  </style>
  <style type="text/css">.gm-style {
        font: 400 11px Roboto, Arial, sans-serif;
        text-decoration: none;
      }
      .gm-style img { max-width: none; }
  </style>
  <style type="text/css">@-webkit-keyframes _gm1670 {
  0% { -webkit-transform: translate3d(0px,0px,0); -webkit-animation-timing-function: ease-out; }
  50% { -webkit-transform: translate3d(0px,-20px,0); -webkit-animation-timing-function: ease-in; }
  100% { -webkit-transform: translate3d(0px,0px,0); -webkit-animation-timing-function: ease-out; }
  } .color {color:white;} .fondo{border-radius: 29px 29px 29px 29px;
  -moz-border-radius: 29px 29px 29px 29px;
  -webkit-border-radius: 29px 29px 29px 29px;
  border: 0px solid #000000;}
  </style>

<body data-spy="scroll" data-target=".header" data-offset="76" class="-loading video-landing standart-grid add-scroll" >

<?php
if(isset($_POST['email'])) {
 
    // Edita las dos líneas siguientes con tu dirección de correo y asunto personalizados
 
    $email_to = "";
 
    $email_subject = "Asunto de Mensaje";   

 //En esta parte el valor "name" nos sirve para crear las variables que recolectaran la información de cada campo
    
    $name = $_POST['name']; // requerido
 
    $email_from = $_POST['email']; // requerido
 
    $asunto = $_POST['asunto1']; // no requerido 

    $message = $_POST['message']; // requerido

//A partir de aqui se contruye el cuerpo del mensaje tal y como llegará al correo

$email_message = "Detalles del formulario de contacto:\n\n";
$email_message .= "Nombre: " . $name . "\n";
$email_message .= "Correo: " . $email_from . "\n";
$email_message .= "Mensaje: " . $message . "\n\n";
  
 
//Se crean los encabezados del correo
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>
<!-- BACKGROUND VIDEO -->
  <div canvas="" class="fullscreen-bg" style="">
    <video loop="" muted="" autoplay="" poster="img/video_screenshot.jpg" class="fullscreen-bg__video">
      <source src="videos/video_bg_720_compressed.webm" type="video/webm">
      <source src="videos/video_bg_720_compressed.mp4" type="video/mp4">
      <source src="videos/video_bg_720_compressed.ogv" type="video/ogg">
    </video>
    <div class="video_bg_overlay" style="background-color: rgba(0, 0, 0, 0.7);">
      <div class="container">
        <div class="row">
          <div class="col-xs-2 bg-border-col-item"></div>
          <div class="col-xs-2 bg-border-col-item"></div>
          <div class="col-xs-2 d-none bg-border-col-item"></div>
          <div class="col-xs-2 d-none bg-border-col-item"></div>
          <div class="col-xs-2 d-none bg-border-col-item"></div>
          <div class="col-xs-2 bg-border-col-item"></div>
        </div>
      </div>
    </div>
  </div>
  <!-- BACKGROUND VIDEO END -->

  


  <div class="main-wrap-content" canvas="container" style="">

    <main class="main">
      <!-- WELCOME SECTION -->
      <section class="section-welcome section" id="inicio">
        <div class="container">
          <div class="content">
            <center><h2>Gracias por comunicarte con nosotros</h2></center>
            <div class="logo-center">
              <img src="img/logo_white_lg.png" alt="logo">
            </div>
            <center><a href="/index.html"></a><button class="btn btn-warning">Volver</button></a></center>

            
          </div>
        </div>


  </div>

  <script src="js/jquery.min.js"></script>
  <script src="js/moment-with-locales.min.js"></script>
  
  <script src="js/shuffle.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/bootstrap-datetimepicker.min.js"></script>
  <script src="js/slick.min.js"></script>
  <script src="js/rellax.min.js"></script>
  <script src="js/masonry.pkgd.min.js"></script>
  <script src="js/slick-lightbox.min.js"></script>

  <script src="js/slidebars.min.js"></script>

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBSM5q5G28jLqw3fcBKoV5qRLUv_HcCnmM"></script>
  <script src="js/all.js"></script>
      <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-89546139-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-89546139-1');
    </script>





</body></html>
<?php
 
}
 
?>
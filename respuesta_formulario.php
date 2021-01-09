<html>
    <head>
       <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
    
        <title>My | Web</title>
         <!--LINKS SECTION -- STYLE -- BOOTSTRAP -- JQUERY-->
       <link rel="stylesheet"  href="styles/style_index.css">
       <link rel="stylesheet"  href="boot/css/bootstrap.min.css">
       <script src="jQuery/jquery-3.2.1.min.js"></script>
       <script src="boot/js/bootstrap.min.js"></script>
       <link rel="icon"  href="pictures/coding-1294373_640.png" type="image/x.icon">
        <!--STYLE SECTION-->
       <style>
           .row{        
                margin-left: 0;
                margin-right: 0;
               }
           body{
               
               font-family: monospace;
                background-color:#dcdde1;
                margin: 0 10px;
               font-size: 30px;
           }
           
           .padding_container{
               padding-bottom: 80px;
               padding-top: 80px;
           }
           .margen{
               margin: 5px solid black;
           }
           
       </style>
    </head>
    <body>
    
<div hidden>
    <?php 
    //------------------PHP SECTION------------------
echo"<pre>";
print_r($_POST);
echo"<pre>";

//---EMAIL WHERE  THE MAIL CONTENT MUST BE SUBMITTED---
    $destino="rockzavalat@hotmail.com";
    $enviante=$_POST['input_email'];
    //-----MAIL CONTENT-----
    $asunto="Contact Information";
    
         $contenido="
    ------------------------------------
    NOMBRE:  | $_POST[input_name]
    EDAD:    | $_POST[input_age]
    SEXO:    | $_POST[input_gender]
    EMAIL:   | $_POST[input_email]
    TELEFONO:| $_POST[input_telephone]
    MENSAJE: | $_POST[input_comments]
    ------------------------------------
                    ";
    //--------------------------
    $headers='From:'.$enviante."\r\n".
              'Reply-To:'.$enviante."\r\n".
               'X-Mailer:PHP/'.phpversion();
    
    mail($destino,$asunto,$contenido,$headers);
  
    //------------------PHP SECTION------------------
?>
        </div>
    <div class=" padding_container">
<section class="row    contenedores ">
    
<div class="col-md-12   center">
<p>¡¡Gracias {<?php echo "$_POST[input_name]";?>} por tu interes , pronto recibiras un email de alguno de nuestros asociados con la información que solicitaste!!.</p>
    <hr>
</div>
    <div style="height:10px;"></div>
<div class="col-md-12  center">
    <img src="pictures/approved_form.png" alt="approved_form.png" style="width:25%;">
</div>
   <br> 
   <div class="center">
    <button class="btn btn-success" ><a href="index.html" style="color:white; text-decoration: none;">OK</a></button>
       <br>
    </div>
</section>
        </div>
        </body>
</html>

<?php
session_start();
$_SESSION = $_POST;
//var_dump($_SESSION);
?>
<!DOCTYPE html>
<HTML>

    <head>

        <script src='http://code.jquery.com/jquery-latest.js'></script>
        <meta content='198866970306901' property='fb:admins'/>
        <meta charset='utf-8'/>

        <title>Ficha Vampire</title>
    </head>


    <body>
        <?php require 'classes/criaimg.php'; ?> 
        <div>
            Veja o resultado.
        </div>
        <div>

             <?php echo '<img src="data:image/png;base64,'. createImageWithText() .'" />';?>
      
        </div>
    
    </body>
</HTML>
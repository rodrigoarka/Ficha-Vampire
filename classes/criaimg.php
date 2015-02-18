
<?php


function createImageWithText() {
   // header("Content-type: image/png");
    $width = 1074;
    $height = 1434;
    $im = imagecreatefromjpeg('imgs/vamp.jpg');
    $ponto0 = imagecreatefrompng('imgs/ficha/classic/pontos0.png');
    $ponto1 = imagecreatefrompng('imgs/ficha/classic/pontos1.png');
    $ponto2 = imagecreatefrompng('imgs/ficha/classic/pontos2.png');
    $ponto3 = imagecreatefrompng('imgs/ficha/classic/pontos3.png');
    $ponto4 = imagecreatefrompng('imgs/ficha/classic/pontos4.png');
    $ponto5 = imagecreatefrompng('imgs/ficha/classic/pontos5.png');

// Allocate colors
    $cor1 = imagecolorallocate($im, 42, 200, 196);
    $cor2 = imagecolorallocate($im, 9, 161, 157);
    $cor3 = imagecolorallocate($im, 0, 143, 139);
    $preto = imagecolorallocate($im, 50, 50, 50);
    $branco = imagecolorallocate($im, 255, 255, 255);


    atributos($im);
    cabecalho($im, $preto);
    #################################################### Salva por aqui ################################################
    //inicia buffer
    ob_start();
    // cria imagem de sa�da, formato jpeg, bom 85% de qualidade
    

     imagepng($im);
    //captura sa�da para string
    $contents = base64_encode(ob_get_contents());
    //finaliza captura
    ob_end_clean();
    //libera mem�ria
    imagedestroy($im);
    //escreve arquivo em disco, usando os comando b�sicos do PHP
    // $nomedaficha = $_POST["nome"].$_POST["jogador"].$_POST["clan"].".png";
    // $fh = fopen("imgs/{$nomedaficha}", "w+");
    // fwrite($fh, $contents);
    // fclose($fh);
    return $contents;
}

function cabecalho($im, $cor) {
    #################################################### Cabe�alho ################################################   
    #
    #
    
    // Escolhe as fontes
    $font = 'fonts/PERCTEXT.TTF';

    //Nome
    $tamanhoFonte = 18;
    $xTexto = 140;
    $yTexto = 242;
    imagettftext($im, $tamanhoFonte, 0, $xTexto, $yTexto, $cor, $font, $_POST["nome"]);

    //Jogador
    $tamanhoFonte = 18;
    $xTexto = 172;
    $yTexto = 271;
    imagettftext($im, $tamanhoFonte, 0, $xTexto, $yTexto, $cor, $font, $_POST["jogador"]);

    //Cr�nica
    $tamanhoFonte = 18;
    $xTexto = 172;
    $yTexto = 300;
    imagettftext($im, $tamanhoFonte, 0, $xTexto, $yTexto, $cor, $font, 'Invisíveis by Night');

    //Natureza
    $tamanhoFonte = 18;
    $xTexto = 510;
    $yTexto = 242;
    imagettftext($im, $tamanhoFonte, 0, $xTexto, $yTexto, $cor, $font, $_POST["natureza"]);

    //Comportamento
    $tamanhoFonte = 18;
    $xTexto = 582;
    $yTexto = 271;
    imagettftext($im, $tamanhoFonte, 0, $xTexto, $yTexto, $cor, $font, $_POST["comportamento"]);

    //Clan
    $tamanhoFonte = 18;
    $xTexto = 445;
    $yTexto = 300;
    imagettftext($im, $tamanhoFonte, 0, $xTexto, $yTexto, $cor, $font, $_POST["clan"]);

    //Gera��o
    $tamanhoFonte = 18;
    $xTexto = 835;
    $yTexto = 242;
    imagettftext($im, $tamanhoFonte, 0, $xTexto, $yTexto, $cor, $font, 13 - $_POST["geracao"] . "ª");

    //Refugio
    $tamanhoFonte = 18;
    $xTexto = 835;
    $yTexto = 271;
    imagettftext($im, $tamanhoFonte, 0, $xTexto, $yTexto, $cor, $font, $_POST["refugio"]);

    //Conceito
    $tamanhoFonte = 18;
    $xTexto = 835;
    $yTexto = 300;
    imagettftext($im, $tamanhoFonte, 0, $xTexto, $yTexto, $cor, $font, $_POST["conceito"]);
}

function atributos($im) {

    $ponto[0] = imagecreatefrompng('imgs/ficha/classic/pontos0.png');
    $ponto[1] = imagecreatefrompng('imgs/ficha/classic/pontos1.png');
    $ponto[2] = imagecreatefrompng('imgs/ficha/classic/pontos2.png');
    $ponto[3] = imagecreatefrompng('imgs/ficha/classic/pontos3.png');
    $ponto[4] = imagecreatefrompng('imgs/ficha/classic/pontos4.png');
    $ponto[5] = imagecreatefrompng('imgs/ficha/classic/pontos5.png');


    $pontoG[0] = imagecreatefrompng('imgs/ficha/classic/p0.png');
    $pontoG[1] = imagecreatefrompng('imgs/ficha/classic/p1.png');
    $pontoG[2] = imagecreatefrompng('imgs/ficha/classic/p2.png');
    $pontoG[3] = imagecreatefrompng('imgs/ficha/classic/p3.png');
    $pontoG[4] = imagecreatefrompng('imgs/ficha/classic/p4.png');
    $pontoG[5] = imagecreatefrompng('imgs/ficha/classic/p5.png');
    $pontoG[6] = imagecreatefrompng('imgs/ficha/classic/p6.png');
    $pontoG[7] = imagecreatefrompng('imgs/ficha/classic/p7.png');
    $pontoG[8] = imagecreatefrompng('imgs/ficha/classic/p8.png');
    $pontoG[9] = imagecreatefrompng('imgs/ficha/classic/p9.png');
    $pontoG[10] = imagecreatefrompng('imgs/ficha/classic/p10.png');
    $forca = $_POST["forca"];

    $destreza = $_POST["destreza"];
    $vigor = $_POST["vigor"];
    
    $carisma = $_POST["carisma"];
    $manipulacao = $_POST["manipulacao"];
    $aparencia = $_POST["aparencia"];
    
    $percepcao = $_POST["percepcao"];
    $inteligencia = $_POST["inteligencia"];
    $raciocinio = $_POST["raciocinio"];
    
    $prontidao = $_POST["prontidao"];
    $esportes = $_POST["esportes"];
    $briga = $_POST["briga"];
    $esquiva = $_POST["esquiva"];
    $empatia = $_POST["empatia"];
    $expressao = $_POST["expressao"];    
    $intimidacao = $_POST["intimidacao"];
    $lideranca = $_POST["lideranca"];
    $manha = $_POST["manha"];
    $labia = $_POST["labia"];

     $empanimais = $_POST["empanimais"]; 
     $oficios = $_POST["oficios"];
     $conducao = $_POST["conducao"];
     $etiqueta = $_POST["etiqueta"]; 
     $afogo = $_POST["afogo"]; 
     $abrancas = $_POST["abrancas"]; 
     $performace = $_POST["performace"]; 
     $seguranca = $_POST["seguranca"]; 
     $furtividade = $_POST["furtividade"]; 
     $sobrevivencia = $_POST["sobrevivencia"]; 
     
      $academicos  = $_POST["academicos"]; 
      $computador  = $_POST["computador"]; 
      $financas  = $_POST["financas"]; 
      $investigacao  = $_POST["investigacao"]; 
      $direito  = $_POST["direito"]; 
      $liguinstica  = $_POST["liguinstica"]; 
      $medicina  = $_POST["medicina"]; 
      $ocultismo  = $_POST["ocultismo"]; 
      $politica  = $_POST["politica"]; 
      $ciencia  = $_POST["ciencia"];


$aliados = $_POST["aliados"];
$contatos = $_POST["contatos"];
$fama = $_POST["fama"];
$geracao = $_POST["geracao"];
$rebanho = $_POST["rebanho"];
$mentor = $_POST["mentor"];
$recursos = $_POST["recursos"];
$lacaios = $_POST["lacaios"];   

$d1 = $_POST["d1"];
$d2 = $_POST["d2"];
$d3 = $_POST["d3"];
$d4 = $_POST["d4"];
$d5 = $_POST["d5"];
$d6 = $_POST["d6"];
$d7 = $_POST["d7"];
$d8 = $_POST["d8"];

$conciencia = $_POST["conciencia"];
$autocontrole = $_POST["autocontrole"];
$coragem = $_POST["coragem"];

 $humanidade = $_POST["humanidade"];
 $vontade = $_POST["vontade"];


    imagecopy($im, $ponto[$forca], 287, 389, 0, 0, 74, 15);
    imagecopy($im, $ponto[$destreza], 287, 414, 0, 0, 74, 15);
    imagecopy($im, $ponto[$vigor], 287, 440, 0, 0, 74, 15);

    imagecopy($im, $ponto[$carisma], 610, 389, 0, 0, 74, 15);
    imagecopy($im, $ponto[$manipulacao], 610, 414, 0, 0, 74, 15);
    imagecopy($im, $ponto[$aparencia], 610, 440, 0, 0, 74, 15);

    imagecopy($im, $ponto[$percepcao], 934, 389, 0, 0, 74, 15);
    imagecopy($im, $ponto[$inteligencia], 934, 414, 0, 0, 74, 15);
    imagecopy($im, $ponto[$raciocinio], 934, 440, 0, 0, 74, 15);

 ########## Habilidades
    ##Talentos
    imagecopy($im, $ponto[$prontidao], 284, 547, 0, 0, 74, 15);    
    imagecopy($im, $ponto[$esportes], 284, 572, 0, 0, 74, 15);
    imagecopy($im, $ponto[$briga], 284, 597, 0, 0, 74, 15);
    imagecopy($im, $ponto[$esquiva], 284, 622, 0, 0, 74, 15);    
    imagecopy($im, $ponto[$empatia], 284, 648, 0, 0, 74, 15);
    imagecopy($im, $ponto[$expressao], 284, 673, 0, 0, 74, 15);
    imagecopy($im, $ponto[$intimidacao], 284, 698, 0, 0, 74, 15);    
    imagecopy($im, $ponto[$lideranca], 284, 723, 0, 0, 74, 15);
    imagecopy($im, $ponto[$manha], 284, 748, 0, 0, 74, 15);
    imagecopy($im, $ponto[$labia], 284, 774, 0, 0, 74, 15);

    ##Pericias  

    imagecopy($im, $ponto[$empanimais], 609, 547, 0, 0, 74, 15);    
    imagecopy($im, $ponto[$oficios], 609, 572, 0, 0, 74, 15);
    imagecopy($im, $ponto[$conducao], 609, 597, 0, 0, 74, 15);
    imagecopy($im, $ponto[$etiqueta], 609, 622, 0, 0, 74, 15);    
    imagecopy($im, $ponto[$afogo], 609, 648, 0, 0, 74, 15);
    imagecopy($im, $ponto[$abrancas], 609, 673, 0, 0, 74, 15);
    imagecopy($im, $ponto[$performace], 609, 698, 0, 0, 74, 15);    
    imagecopy($im, $ponto[$seguranca], 609, 723, 0, 0, 74, 15);
    imagecopy($im, $ponto[$furtividade], 609, 748, 0, 0, 74, 15);
    imagecopy($im, $ponto[$sobrevivencia], 609, 774, 0, 0, 74, 15);

#
//prontidão            
    imagecopy($im, $ponto[$academicos], 934, 547, 0, 0, 74, 15);    
    imagecopy($im, $ponto[$computador], 934, 572, 0, 0, 74, 15);
    imagecopy($im, $ponto[$financas], 934, 597, 0, 0, 74, 15);
    imagecopy($im, $ponto[$investigacao], 934, 622, 0, 0, 74, 15);    
    imagecopy($im, $ponto[$direito], 934, 648, 0, 0, 74, 15);
    imagecopy($im, $ponto[$liguinstica], 934, 673, 0, 0, 74, 15);          
    imagecopy($im, $ponto[$medicina], 934, 698, 0, 0, 74, 15);     
    imagecopy($im, $ponto[$ocultismo], 934, 723, 0, 0, 74, 15);
    imagecopy($im, $ponto[$politica], 934, 748, 0, 0, 74, 15);
    imagecopy($im, $ponto[$ciencia], 934, 774, 0, 0, 74, 15);

    imagecopy($im, $ponto[$aliados],  284, 872+14 , 0, 0, 74, 15);
    imagecopy($im, $ponto[$contatos], 284, 897+14, 0, 0, 74, 15);
    imagecopy($im, $ponto[$fama],     284, 922+14, 0, 0, 74, 15);    
    imagecopy($im, $ponto[$geracao],  284, 948+14, 0, 0, 74, 15);
    imagecopy($im, $ponto[$rebanho],  284, 973+14, 0, 0, 74, 15);          
    imagecopy($im, $ponto[$mentor],   284, 998+14, 0, 0, 74, 15);     
    imagecopy($im, $ponto[$recursos], 284, 1023+14, 0, 0, 74, 15);
    imagecopy($im, $ponto[$lacaios],  284, 1048+14, 0, 0, 74, 15);


    $tamanhoFonte = 18;
    $font = 'fonts/PERCTEXT.TTF';
    $cor = imagecolorallocate($im, 0, 0, 0);
    imagettftext($im, $tamanhoFonte, 0, 390, 900, $cor, $font, $_POST["d1t"]);
    imagettftext($im, $tamanhoFonte, 0, 390, 900 + 26, $cor, $font, $_POST["d2t"]);
    imagettftext($im, $tamanhoFonte, 0, 390, 900+ 26+ 26, $cor, $font, $_POST["d3t"]);
    imagettftext($im, $tamanhoFonte, 0, 390, 900+ 26+ 26+ 25, $cor, $font, $_POST["d4t"]);
    imagettftext($im, $tamanhoFonte, 0, 390, 900+ 26+ 26+ 26+ 25, $cor, $font, $_POST["d5t"]);
    imagettftext($im, $tamanhoFonte, 0, 390, 900+ 26+ 26+ 26+ 26+ 24, $cor, $font, $_POST["d6t"]);
    imagettftext($im, $tamanhoFonte, 0, 390, 900+ 26+ 26+ 26+ 26+ 26+ 24, $cor, $font, $_POST["d7t"]);
    imagettftext($im, $tamanhoFonte, 0, 390, 900+ 26+ 26+ 26+ 26+ 26+ 26+ 23, $cor, $font, $_POST["d8t"]);

    imagecopy($im, $ponto[$d1],  609, 872+14 , 0, 0, 74, 15);
    imagecopy($im, $ponto[$d2], 609, 897+14, 0, 0, 74, 15);
    imagecopy($im, $ponto[$d3],     609, 922+14, 0, 0, 74, 15);    
    imagecopy($im, $ponto[$d4],  609, 948+14, 0, 0, 74, 15);
    imagecopy($im, $ponto[$d5],  609, 973+14, 0, 0, 74, 15);          
    imagecopy($im, $ponto[$d6],   609, 998+14, 0, 0, 74, 15);     
    imagecopy($im, $ponto[$d7], 609, 1023+14, 0, 0, 74, 15);
    imagecopy($im, $ponto[$d8],  609, 1048+14, 0, 0, 74, 15);

    imagecopy($im, $ponto[$conciencia],   934, 884, 0, 0, 74, 15);     
    imagecopy($im, $ponto[$autocontrole], 934, 960, 0, 0, 74, 15);
    imagecopy($im, $ponto[$coragem],  934, 1037, 0, 0, 74, 15);

    imagecopy($im, $pontoG[$humanidade], 392, 1181, 0, 0, 290, 20);
    imagecopy($im, $pontoG[$vontade],  392, 1251, 0, 0, 290, 20);

}

?>
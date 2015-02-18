<?php
session_start();
$_SESSION = $_POST;
//var_dump($_SESSION);
?>
<div class="wrap">
    <form action="criar.php" method="POST" class="fpasso2">
        <script>
            $(document).ready(function() {


                        //atributos

                        $(".atributos .col1 div").find(".menos").click(function() {
                            var valor1 = $(this).siblings('input').val();
                            if (valor1 > 1) {
                                valor1 = parseInt(valor1) - parseInt(1);
                                $(this).siblings('input').val(valor1);
                                $(this).siblings('span').html(valor1);
                                $(this).siblings('span').removeClass();
                                $(this).siblings('span').addClass('h' + valor1);
                            }
                        });
                        $(".atributos .col1 div").find(".mais").click(function() {
                            var valor1 = $(this).siblings('input').val();
                            //alert(valor1);
                            if (valor1 < 5) {
                                valor1 = parseInt(valor1) + parseInt(1);
                                $(this).siblings('input').val(valor1);
                                $(this).siblings('span').html(valor1);
                                $(this).siblings('span').removeClass();
                                $(this).siblings('span').addClass('h' + valor1);
                            }
                        });



                        $(".atributos .col2 div").find(".menos").click(function() {
                            var valor1 = $(this).siblings('input').val();
                            if (valor1 > 1) {
                                valor1 = parseInt(valor1) - parseInt(1);

                                $(this).siblings('input').val(valor1);
                                $(this).siblings('span').html(valor1);
                                $(this).siblings('span').removeClass();
                                $(this).siblings('span').addClass('h' + valor1);
                            }
                        });

                        $(".atributos .col2 div").find(".mais").click(function() {
                            var valor1 = $(this).siblings('input').val();
                            //alert(valor1);
                            if ( valor1 < 5) {
                                valor1 = parseInt(valor1) + parseInt(1);
                                $(this).siblings('input').val(valor1);
                                $(this).siblings('span').html(valor1);
                                $(this).siblings('span').removeClass();
                                $(this).siblings('span').addClass('h' + valor1);
                            }
                        });



                        $(".atributos .col3 div").find(".menos").click(function() {
                            var valor1 = $(this).siblings('input').val();
                            if (valor1 > 1) {
                                valor1 = parseInt(valor1) - parseInt(1);
                                $(this).siblings('input').val(valor1);
                                $(this).siblings('span').html(valor1);
                                $(this).siblings('span').removeClass();
                                $(this).siblings('span').addClass('h' + valor1);
                                $(".total3").html(Total3);
                            }
                        });
                        $(".atributos .col3 div").find(".mais").click(function() {
                            var valor1 = $(this).siblings('input').val();
                            //alert(valor1);
                            if (valor1 < 5) {
                                valor1 = parseInt(valor1) + parseInt(1);
                                $(this).siblings('input').val(valor1);
                                $(this).siblings('span').html(valor1);
                                $(this).siblings('span').removeClass();
                                $(this).siblings('span').addClass('h' + valor1);
                            }
                        });   


                        //habilidades

                        $(".habilidades .col1 div").find(".menos").click(function() {
                            var valor1 = $(this).siblings('input').val();
                            if (valor1 > 0) {
                                valor1 = parseInt(valor1) - parseInt(1);
                                $(this).siblings('input').val(valor1);
                                $(this).siblings('span').html(valor1);
                                $(this).siblings('span').removeClass();
                                $(this).siblings('span').addClass('h' + valor1);
                            }
                        });
                        $(".habilidades .col1 div").find(".mais").click(function() {
                            var valor1 = $(this).siblings('input').val();
                            //alert(valor1);
                            if (valor1 < 5) {
                                valor1 = parseInt(valor1) + parseInt(1);
                                $(this).siblings('input').val(valor1);
                                $(this).siblings('span').html(valor1);
                                $(this).siblings('span').removeClass();
                                $(this).siblings('span').addClass('h' + valor1);
                            }
                        });



                        $(".habilidades .col2 div").find(".menos").click(function() {
                            var valor1 = $(this).siblings('input').val();
                            if (valor1 > 0) {
                                valor1 = parseInt(valor1) - parseInt(1);

                                $(this).siblings('input').val(valor1);
                                $(this).siblings('span').html(valor1);
                                $(this).siblings('span').removeClass();
                                $(this).siblings('span').addClass('h' + valor1);
                            }
                        });

                        $(".habilidades .col2 div").find(".mais").click(function() {
                            var valor1 = $(this).siblings('input').val();
                            //alert(valor1);
                            if ( valor1 < 5) {
                                valor1 = parseInt(valor1) + parseInt(1);
                                $(this).siblings('input').val(valor1);
                                $(this).siblings('span').html(valor1);
                                $(this).siblings('span').removeClass();
                                $(this).siblings('span').addClass('h' + valor1);
                            }
                        });



                        $(".habilidades .col3 div").find(".menos").click(function() {
                            var valor1 = $(this).siblings('input').val();
                            if (valor1 > 0) {
                                valor1 = parseInt(valor1) - parseInt(1);
                                $(this).siblings('input').val(valor1);
                                $(this).siblings('span').html(valor1);
                                $(this).siblings('span').removeClass();
                                $(this).siblings('span').addClass('h' + valor1);
                                $(".total3").html(Total3);
                            }
                        });
                        $(".habilidades .col3 div").find(".mais").click(function() {
                            var valor1 = $(this).siblings('input').val();
                            //alert(valor1);
                            if (valor1 < 5) {
                                valor1 = parseInt(valor1) + parseInt(1);
                                $(this).siblings('input').val(valor1);
                                $(this).siblings('span').html(valor1);
                                $(this).siblings('span').removeClass();
                                $(this).siblings('span').addClass('h' + valor1);
                            }
                        });

                        //vantagens

                        $(".vantagens .col1 div").find(".menos").click(function() {
                            var valor1 = $(this).siblings('input').val();
                            if (valor1 > 0) {
                                valor1 = parseInt(valor1) - parseInt(1);
                                $(this).siblings('input').val(valor1);
                                $(this).siblings('span').html(valor1);
                                $(this).siblings('span').removeClass();
                                $(this).siblings('span').addClass('h' + valor1);
                            }
                        });
                        $(".vantagens .col1 div").find(".mais").click(function() {
                            var valor1 = $(this).siblings('input').val();
                            //alert(valor1);
                            if (valor1 < 5) {
                                valor1 = parseInt(valor1) + parseInt(1);
                                $(this).siblings('input').val(valor1);
                                $(this).siblings('span').html(valor1);
                                $(this).siblings('span').removeClass();
                                $(this).siblings('span').addClass('h' + valor1);
                            }
                        });



                        $(".vantagens .col2 div").find(".menos").click(function() {
                            var valor1 = $(this).siblings('input').val();
                            if (valor1 > 0) {
                                valor1 = parseInt(valor1) - parseInt(1);

                                $(this).siblings('input').val(valor1);
                                $(this).siblings('span').html(valor1);
                                $(this).siblings('span').removeClass();
                                $(this).siblings('span').addClass('h' + valor1);
                            }
                        });

                        $(".vantagens .col2 div").find(".mais").click(function() {
                            var valor1 = $(this).siblings('input').val();
                            //alert(valor1);
                            if ( valor1 < 5) {
                                valor1 = parseInt(valor1) + parseInt(1);
                                $(this).siblings('input').val(valor1);
                                $(this).siblings('span').html(valor1);
                                $(this).siblings('span').removeClass();
                                $(this).siblings('span').addClass('h' + valor1);
                            }
                        });



                        $(".vantagens .col3 div").find(".menos").click(function() {
                            var valor1 = $(this).siblings('input').val();
                            if (valor1 > 1) {
                                valor1 = parseInt(valor1) - parseInt(1);
                                $(this).siblings('input').val(valor1);
                                $(this).siblings('span').html(valor1);
                                $(this).siblings('span').removeClass();
                                $(this).siblings('span').addClass('h' + valor1);
                                $(".total3").html(Total3);
                            }
                        });
                        $(".vantagens .col3 div").find(".mais").click(function() {
                            var valor1 = $(this).siblings('input').val();
                            //alert(valor1);
                            if (valor1 < 5) {
                                valor1 = parseInt(valor1) + parseInt(1);
                                $(this).siblings('input').val(valor1);
                                $(this).siblings('span').html(valor1);
                                $(this).siblings('span').removeClass();
                                $(this).siblings('span').addClass('h' + valor1);
                            }
                        });

                        //outros


                        $(".outros .col2 div").find(".menos").click(function() {
                            var valor1 = $(this).siblings('input').val();
                            if (valor1 > 0) {
                                valor1 = parseInt(valor1) - parseInt(1);

                                $(this).siblings('input').val(valor1);
                                $(this).siblings('span').html(valor1);
                                $(this).siblings('span').removeClass();
                                $(this).siblings('span').addClass('p' + valor1);
                            }
                        });

                        $(".outros .col2 div").find(".mais").click(function() {
                            var valor1 = $(this).siblings('input').val();
                            //alert(valor1);
                            if ( valor1 < 10) {
                                valor1 = parseInt(valor1) + parseInt(1);
                                $(this).siblings('input').val(valor1);
                                $(this).siblings('span').html(valor1);
                                $(this).siblings('span').removeClass();
                                $(this).siblings('span').addClass('p' + valor1);
                            }
                        });

              });
        </script>
        <div class="cabecalho">

            <INPUT type="text" id="nome" name="nome" />

            <INPUT type="text" id="jogador" name="jogador" />
            <INPUT type="hidden" id="cronica" name="cronica" value="Invisíveis by Night" />

            <SELECT id="natureza" name="natureza">
                <option> Excêntrico</option>
                <option> Arquiteto</option>
                <option> Autocrata</option>
                <option> Bon Vivant</option>
                <option> Caçador de Emoções</option>
                <option> Celebrante</option>
                <option> Competidor.</option>
                <option> Conformista</option>
                <option> Criança</option>
                <option> Diretor</option>
                <option> Durão</option>
                <option> Esperto</option>
                <option> Fanático</option>
                <option> Filantropo</option>
                <option> Galante:</option>
                <option> Gozador</option>
                <option> Juiz</option>
                <option> Mártir</option>
                <option> Masoquista</option>
                <option> Monstro</option>
                <option> Pedagogo</option>
                <option> Penitente</option>
                <option> Perfeccionista</option>
                <option> Ranzinza</option>
                <option> Rebelde</option>
                <option> Sobrevivente</option>
                <option> Solitário</option>
                <option> Tradicionalista</option>
                <option> Valentão</option>
                <option> Visionário</option>
            </SELECT>


            <SELECT id="comportamento" name="comportamento">
                <option> Excêntrico</option>
                <option> Arquiteto</option>
                <option> Autocrata</option>
                <option> Bon Vivant</option>
                <option> Caçador de Emoções</option>
                <option> Celebrante</option>
                <option> Competidor.</option>
                <option> Conformista</option>
                <option> Criança</option>
                <option> Diretor</option>
                <option> Durão</option>
                <option> Esperto</option>
                <option> Fanático</option>
                <option> Filantropo</option>
                <option> Galante:</option>
                <option> Gozador</option>
                <option> Juiz</option>
                <option> Mártir</option>
                <option> Masoquista</option>
                <option> Monstro</option>
                <option> Pedagogo</option>
                <option> Penitente</option>
                <option> Perfeccionista</option>
                <option> Ranzinza</option>
                <option> Rebelde</option>
                <option> Sobrevivente</option>
                <option> Solitário</option>
                <option> Tradicionalista</option>
                <option> Valentão</option>
                <option> Visionário</option>
            </SELECT>


            <SELECT id="clan" name="clan">
                <option>Brujah</option>
                <option>Gangrel</option>
                <option>Malkavian</option>
                <option>Nosferatu</option>
                <option>Toreador</option>
                <option>Tremere</option>
                <option>Ventrue</option>
                <option>Lasombra</option>
                <option>Tzimisce</option>
                <option>Giovanni</option>
                <option>Assamita</option>
                <option>Ravnos</option>
                <option>Segdores de Set</option>
                <option>Samed</option>
                <option>Baali</option>
                <option>Capadócios</option>
            </SELECT>




            <INPUT type="text" id="refugio" name="refugio" />

            <INPUT type="text" id="conceito" name="conceito" /> 

        </div>


        <div class="atributos">        

            <div class="col1 left " >
                <div>

                    <a href="javascript:void();" class="menos"> Menos </a>
                    <span id="pontos" class="h1">1</span>
                    <input type="hidden" value="1" class="forca" name="forca">
                    <a href="javascript:void();" class="mais"> Mais </a>

                </div>         
                <div>

                    <a href="javascript:void();" class="menos"> Menos </a>
                    <span id="pontos" class="h1">1</span>
                    <input type="hidden" value="1" class="destreza" name="destreza">
                    <a href="javascript:void();" class="mais"> Mais </a>

                </div>    

                <div>

                    <a href="javascript:void();" class="menos"> Menos </a>
                    <span id="pontos" class="h1">1</span>
                    <input type="hidden" value="1" class="vigor" name="vigor">
                    <a href="javascript:void();" class="mais"> Mais </a>

                </div>    
            </div>

            <div class="col2">
                <div>

                    <a href="javascript:void();" class="menos"> Menos </a>
                    <span id="pontos" class="h1">1</span>
                    <input type="hidden" value="1" class="carisma" name="carisma">
                    <a href="javascript:void();" class="mais"> Mais </a>

                </div>         
                <div>
                    <a href="javascript:void();" class="menos"> Menos </a>
                    <span id="pontos" class="h1">1</span>
                    <input type="hidden" value="1" class="manipulacao" name="manipulacao">
                    <a href="javascript:void();" class="mais"> Mais </a>

                </div>    

                <div>                   


                    <a href="javascript:void();" class="menos"> Menos </a>
                    <span id="pontos" class="h1">1</span>
                    <input type="hidden" value="1" class="aparencia" name="aparencia">
                    <a href="javascript:void();" class="mais"> Mais </a>

                </div>    
            </div>   
            <div class="col3">
                <div>

                    <a href="javascript:void();" class="menos"> Menos </a>
                    <span id="pontos" class="h1">1</span>
                    <input type="hidden" value="1" class="percepcao" name="percepcao">
                    <a href="javascript:void();" class="mais"> Mais </a>

                </div>         
                <div>

                    <a href="javascript:void();" class="menos"> Menos </a>
                    <span id="pontos" class="h1">1</span>
                    <input type="hidden" value="1" class="inteligencia" name="inteligencia" >
                    <a href="javascript:void();" class="mais"> Mais </a>

                </div>    

                <div>

                    <a href="javascript:void();" class="menos"> Menos </a>
                    <span id="pontos" class="h1">1</span>
                    <input type="hidden" value="1" class="raciocinio" name="raciocinio">
                    <a href="javascript:void();" class="mais"> Mais </a>

                </div>
            </div>   
        </div>
        

        <div class="habilidades">        

            <div class="col1 left " >
                <div>

                    <a href="javascript:void();" class="menos"> Menos </a>
                    <span id="pontos" class="h0">0</span>
                    <input type="hidden" value="0" class="prontidao" name="prontidao">
                    <a href="javascript:void();" class="mais"> Mais </a>

                </div>         
                <div>

                    <a href="javascript:void();" class="menos"> Menos </a>
                    <span id="pontos" class="h0">0</span>
                    <input type="hidden" value="0" class="esportes" name="esportes">
                    <a href="javascript:void();" class="mais"> Mais </a>

                </div>    

                <div>

                    <a href="javascript:void();" class="menos"> Menos </a>
                    <span id="pontos" class="h0">0</span>
                    <input type="hidden" value="0" class="briga" name="briga">
                    <a href="javascript:void();" class="mais"> Mais </a>

                </div>  

                <div>

                    <a href="javascript:void();" class="menos"> Menos </a>
                    <span id="pontos" class="h0">0</span>
                    <input type="hidden" value="0" class="esquiva" name="esquiva">
                    <a href="javascript:void();" class="mais"> Mais </a>

                </div>   


                <div>

                    <a href="javascript:void();" class="menos"> Menos </a>
                    <span id="pontos" class="h0">0</span>
                    <input type="hidden" value="0" class="empatia" name="empatia">
                    <a href="javascript:void();" class="mais"> Mais </a>

                </div>  

                <div>

                    <a href="javascript:void();" class="menos"> Menos </a>
                    <span id="pontos" class="h0">0</span>
                    <input type="hidden" value="0" class="expressao" name="expressao">
                    <a href="javascript:void();" class="mais"> Mais </a>

                </div>  

                <div>

                    <a href="javascript:void();" class="menos"> Menos </a>
                    <span id="pontos" class="h0">0</span>
                    <input type="hidden" value="0" class="intimidacao" name="intimidacao">
                    <a href="javascript:void();" class="mais"> Mais </a>

                </div>  

                <div>

                    <a href="javascript:void();" class="menos"> Menos </a>
                    <span id="pontos" class="h0">0</span>
                    <input type="hidden" value="0" class="lideranca" name="lideranca">
                    <a href="javascript:void();" class="mais"> Mais </a>

                </div>  

                <div>

                    <a href="javascript:void();" class="menos"> Menos </a>
                    <span id="pontos" class="h0">0</span>
                    <input type="hidden" value="0" class="manha" name="manha">
                    <a href="javascript:void();" class="mais"> Mais </a>

                </div>  

                <div>

                    <a href="javascript:void();" class="menos"> Menos </a>
                    <span id="pontos" class="h0">0</span>
                    <input type="hidden" value="0" class="labia" name="labia">
                    <a href="javascript:void();" class="mais"> Mais </a>

                </div>  


            </div>

            <div class="col2">
                <div>

                    <a href="javascript:void();" class="menos"> Menos </a>
                    <span id="pontos" class="h0">0</span>
                    <input type="hidden" value="0" class="empanimais" name="empanimais">
                    <a href="javascript:void();" class="mais"> Mais </a>

                </div>         
                <div>
                    <a href="javascript:void();" class="menos"> Menos </a>
                    <span id="pontos" class="h0">0</span>
                    <input type="hidden" value="0" class="oficios" name="oficios">
                    <a href="javascript:void();" class="mais"> Mais </a>

                </div>    

                <div>                   
                    <a href="javascript:void();" class="menos"> Menos </a>
                    <span id="pontos" class="h0">0</span>
                    <input type="hidden" value="0" class="conducao" name="conducao">
                    <a href="javascript:void();" class="mais"> Mais </a>

                </div>  

                <div>                   
                    <a href="javascript:void();" class="menos"> Menos </a>
                    <span id="pontos" class="h0">0</span>
                    <input type="hidden" value="0" class="etiqueta" name="etiqueta">
                    <a href="javascript:void();" class="mais"> Mais </a>

                </div>   

                <div>                   
                    <a href="javascript:void();" class="menos"> Menos </a>
                    <span id="pontos" class="h0">0</span>
                    <input type="hidden" value="0" class="afogo" name="afogo">
                    <a href="javascript:void();" class="mais"> Mais </a>

                </div>  

                <div>                   
                    <a href="javascript:void();" class="menos"> Menos </a>
                    <span id="pontos" class="h0">0</span>
                    <input type="hidden" value="0" class="abrancas" name="abrancas">
                    <a href="javascript:void();" class="mais"> Mais </a>

                </div>  

                <div>                   
                    <a href="javascript:void();" class="menos"> Menos </a>
                    <span id="pontos" class="h0">0</span>
                    <input type="hidden" value="0" class="performace" name="performace">
                    <a href="javascript:void();" class="mais"> Mais </a>

                </div> 

                <div>                   
                    <a href="javascript:void();" class="menos"> Menos </a>
                    <span id="pontos" class="h0">0</span>
                    <input type="hidden" value="0" class="seguranca" name="seguranca">
                    <a href="javascript:void();" class="mais"> Mais </a>

                </div>   

                <div>                   
                    <a href="javascript:void();" class="menos"> Menos </a>
                    <span id="pontos" class="h0">0</span>
                    <input type="hidden" value="0" class="futividade" name="furtividade">
                    <a href="javascript:void();" class="mais"> Mais </a>

                </div>  


                <div>                   
                    <a href="javascript:void();" class="menos"> Menos </a>
                    <span id="pontos" class="h0">0</span>
                    <input type="hidden" value="0" class="sobrevivencia" name="sobrevivencia">
                    <a href="javascript:void();" class="mais"> Mais </a>

                </div>  
            </div>   
            <div class="col3">
                <div>

                    <a href="javascript:void();" class="menos"> Menos </a>
                    <span id="pontos" class="h0">0</span>
                    <input type="hidden" value="0" class="academicos" name="academicos">
                    <a href="javascript:void();" class="mais"> Mais </a>

                </div>         
                <div>

                    <a href="javascript:void();" class="menos"> Menos </a>
                    <span id="pontos" class="h0">0</span>
                    <input type="hidden" value="0" class="computador" name="computador" >
                    <a href="javascript:void();" class="mais"> Mais </a>

                </div>    

                <div>

                    <a href="javascript:void();" class="menos"> Menos </a>
                    <span id="pontos" class="h0">0</span>
                    <input type="hidden" value="0" class="financas" name="financas">
                    <a href="javascript:void();" class="mais"> Mais </a>

                </div>

                <div>                   
                    <a href="javascript:void();" class="menos"> Menos </a>
                    <span id="pontos" class="h0">0</span>
                    <input type="hidden" value="0" class="investigacao" name="investigacao">
                    <a href="javascript:void();" class="mais"> Mais </a>

                </div>    
                <div>                   
                    <a href="javascript:void();" class="menos"> Menos </a>
                    <span id="pontos" class="h0">0</span>
                    <input type="hidden" value="0" class="direito" name="direito">
                    <a href="javascript:void();" class="mais"> Mais </a>

                </div>  
                <div>                   
                    <a href="javascript:void();" class="menos"> Menos </a>
                    <span id="pontos" class="h0">0</span>
                    <input type="hidden" value="0" class="liguinstica" name="liguinstica">
                    <a href="javascript:void();" class="mais"> Mais </a>

                </div>  
                <div>                   
                    <a href="javascript:void();" class="menos"> Menos </a>
                    <span id="pontos" class="h0">0</span>
                    <input type="hidden" value="0" class="medicina" name="medicina">
                    <a href="javascript:void();" class="mais"> Mais </a>

                </div>  
                <div>                   
                    <a href="javascript:void();" class="menos"> Menos </a>
                    <span id="pontos" class="h0">0</span>
                    <input type="hidden" value="0" class="ocultismo" name="ocultismo">
                    <a href="javascript:void();" class="mais"> Mais </a>

                </div>  
                <div>                   
                    <a href="javascript:void();" class="menos"> Menos </a>
                    <span id="pontos" class="h0">0</span>
                    <input type="hidden" value="0" class="politica" name="politica">
                    <a href="javascript:void();" class="mais"> Mais </a>

                </div>  
                <div>                   
                    <a href="javascript:void();" class="menos"> Menos </a>
                    <span id="pontos" class="h0">0</span>
                    <input type="hidden" value="0" class="ciencia" name="ciencia">
                    <a href="javascript:void();" class="mais"> Mais </a>

                </div>  
            </div>   
        </div>

        <div class="vantagens">        

            <div class="col1 left " >
                <div class="disciplinas">
                <INPUT type="text" class="dt" id="d1t" name="d1t" />
                <INPUT type="text" class="dt" id="d2t" name="d2t" />
                <INPUT type="text" class="dt" id="d3t" name="d3t" />
                <INPUT type="text" class="dt" id="d4t" name="d4t" />
                <INPUT type="text" class="dt" id="d5t" name="d5t" />
                <INPUT type="text" class="dt" id="d6t" name="d6t" />
                <INPUT type="text" class="dt" id="d7t" name="d7t" />
                <INPUT type="text" class="dt" id="d8t" name="d8t" />
                </div>

      
                <div>

                    <a href="javascript:void();" class="menos"> Menos </a>
                    <span id="pontos" class="h0">0</span>
                    <input type="hidden" value="0" class="aliados" name="aliados">
                    <a href="javascript:void();" class="mais"> Mais </a>

                </div>    

                <div>

                    <a href="javascript:void();" class="menos"> Menos </a>
                    <span id="pontos" class="h0">0</span>
                    <input type="hidden" value="0" class="contatos" name="contatos">
                    <a href="javascript:void();" class="mais"> Mais </a>

                </div>  

                <div>

                    <a href="javascript:void();" class="menos"> Menos </a>
                    <span id="pontos" class="h0">0</span>
                    <input type="hidden" value="0" class="fama" name="fama">
                    <a href="javascript:void();" class="mais"> Mais </a>

                </div>   


                <div>

                    <a href="javascript:void();" class="menos"> Menos </a>
                    <span id="pontos" class="h0">0</span>
                    <input type="hidden" value="0" class="rebanho" name="rebanho">
                    <a href="javascript:void();" class="mais"> Mais </a>

                </div>  

                <div>

                    <a href="javascript:void();" class="menos"> Menos </a>
                    <span id="pontos" class="h0">0</span>
                    <input type="hidden" value="0" class="mentor" name="mentor">
                    <a href="javascript:void();" class="mais"> Mais </a>

                </div>  

                <div>

                    <a href="javascript:void();" class="menos"> Menos </a>
                    <span id="pontos" class="h0">0</span>
                    <input type="hidden" value="0" class="recursos" name="recursos">
                    <a href="javascript:void();" class="mais"> Mais </a>

                </div>  

                <div>

                    <a href="javascript:void();" class="menos"> Menos </a>
                    <span id="pontos" class="h0">0</span>
                    <input type="hidden" value="0" class="lacaios" name="lacaios">
                    <a href="javascript:void();" class="mais"> Mais </a>

                </div>  

                <div>

                    <a href="javascript:void();" class="menos"> Menos </a>
                    <span id="pontos" class="h0">0</span>
                    <input type="hidden" value="0" class="geracao" name="geracao">
                    <a href="javascript:void();" class="mais"> Mais </a>

                </div>  



            </div>

            <div class="col2">
                <div>

                    <a href="javascript:void();" class="menos"> Menos </a>
                    <span id="pontos" class="h0">0</span>
                    <input type="hidden" value="0" class="d1" name="d1">
                    <a href="javascript:void();" class="mais"> Mais </a>

                </div>   

                <div>                   
                    <a href="javascript:void();" class="menos"> Menos </a>
                    <span id="pontos" class="h0">0</span>
                    <input type="hidden" value="0" class="d2" name="d2">
                    <a href="javascript:void();" class="mais"> Mais </a>
                </div>  

                <div>                   
                    <a href="javascript:void();" class="menos"> Menos </a>
                    <span id="pontos" class="h0">0</span>
                    <input type="hidden" value="0" class="d3" name="d3">
                    <a href="javascript:void();" class="mais"> Mais </a>
                </div>  

                <div>                   
                    <a href="javascript:void();" class="menos"> Menos </a>
                    <span id="pontos" class="h0">0</span>
                    <input type="hidden" value="0" class="d4" name="d4">
                    <a href="javascript:void();" class="mais"> Mais </a>
                </div>  

                <div>                   
                    <a href="javascript:void();" class="menos"> Menos </a>
                    <span id="pontos" class="h0">0</span>
                    <input type="hidden" value="0" class="d5" name="d5">
                    <a href="javascript:void();" class="mais"> Mais </a>
                </div>  

                <div>                   
                    <a href="javascript:void();" class="menos"> Menos </a>
                    <span id="pontos" class="h0">0</span>
                    <input type="hidden" value="0" class="d6" name="d6">
                    <a href="javascript:void();" class="mais"> Mais </a>
                </div>  

                <div>                   
                    <a href="javascript:void();" class="menos"> Menos </a>
                    <span id="pontos" class="h0">0</span>
                    <input type="hidden" value="0" class="d7" name="d7">
                    <a href="javascript:void();" class="mais"> Mais </a>
                </div>  

                <div>                   
                    <a href="javascript:void();" class="menos"> Menos </a>
                    <span id="pontos" class="h0">0</span>
                    <input type="hidden" value="0" class="d8" name="d8">
                    <a href="javascript:void();" class="mais"> Mais </a>
                </div>  
            </div>   
            <div class="col3">
                <div>                   
                    <a href="javascript:void();" class="menos"> Menos </a>
                    <span id="pontos" class="h1">1</span>
                    <input type="hidden" value="1" class="conciencia" name="conciencia">
                    <a href="javascript:void();" class="mais"> Mais </a>

                </div>  
                <div>                   
                    <a href="javascript:void();" class="menos"> Menos </a>
                    <span id="pontos" class="h1">1</span>
                    <input type="hidden" value="1" class="autocontrole" name="autocontrole">
                    <a href="javascript:void();" class="mais"> Mais </a>

                </div>  
                <div>                   
                    <a href="javascript:void();" class="menos"> Menos </a>
                    <span id="pontos" class="h1">1</span>
                    <input type="hidden" value="1" class="coragem" name="coragem">
                    <a href="javascript:void();" class="mais"> Mais </a>

                </div>  
            </div>   
        </div>
        <div class="outros">        

            <div class="col1 left " >
            </div>
            <div class="col2" >
                <div>                   
                    <a href="javascript:void();" class="menos"> Menos </a>
                    <span id="pontos" class="p0">0</span>
                    <input type="hidden" value="0" class="humanidade" name="humanidade">
                    <a href="javascript:void();" class="mais"> Mais </a>

                </div> 
                <div>                   
                    <a href="javascript:void();" class="menos"> Menos </a>
                    <span id="pontos" class="p0">0</span>
                    <input type="hidden" value="0" class="vontade" name="vontade">
                    <a href="javascript:void();" class="mais"> Mais </a>

                </div> 
            </div>
            <div class="col3" >
            </div>  
        <input type="submit" value="" class="criar">
    </form>
</div>



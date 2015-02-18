<div class="wrap">
    <form action="index.php?passo=passo2" method="POST">
        <script>
            $(document).ready(function() {


                $("#ordem").change(function() {
                    var n = parseInt($("#ordem").val());

                    switch (n)
                    {
                        case 1:

                            var Total1 = 7;
                            var Total2 = 5;
                            var Total3 = 3;
                            break;
                        case 2:
                            var Total1 = 7;
                            var Total2 = 3;
                            var Total3 = 5;
                            break;
                        case 3:
                            var Total1 = 5;
                            var Total2 = 3;
                            var Total3 = 7;
                            break;
                        case 4:
                            var Total1 = 5;
                            var Total2 = 7;
                            var Total3 = 3;
                            break;
                        case 5:
                            var Total1 = 3;
                            var Total2 = 7;
                            var Total3 = 5;
                            break;
                        case 6:
                            var Total1 = 3;
                            var Total2 = 5;
                            var Total3 = 7;
                            break;
                        default :


                    }

                    $(".total1").html(Total1);
                    $(".total2").html(Total2);
                    $(".total3").html(Total3);
                    $(".atributos").removeClass('hidden');
                    $("#ordem").hide();


                    $(".col1 div").find(".menos").click(function() {
                        var valor1 = $(this).siblings('input').val();
                        if (valor1 > 1) {
                            valor1 = parseInt(valor1) - parseInt(1);
                            Total1 = parseInt(Total1) + parseInt(1);
                            $(this).siblings('input').val(valor1);
                            $(this).siblings('span').html(valor1);
                            $(this).siblings('span').removeClass();
                            $(this).siblings('span').addClass('h' + valor1);
                            $(".total1").html(Total1);
                        }
                    });
                    $(".col1 div").find(".mais").click(function() {
                        var valor1 = $(this).siblings('input').val();
                        //alert(valor1);
                        if (Total1 > 0 && valor1 < 5) {
                            valor1 = parseInt(valor1) + parseInt(1);
                            Total1 = parseInt(Total1) - parseInt(1);
                            $(this).siblings('input').val(valor1);
                            $(this).siblings('span').html(valor1);
                            $(this).siblings('span').removeClass();
                            $(this).siblings('span').addClass('h' + valor1);
                            $(".total1").html(Total1);
                        }
                    });



                    $(".col2 div").find(".menos").click(function() {
                        var valor1 = $(this).siblings('input').val();
                        if (valor1 > 1) {
                            valor1 = parseInt(valor1) - parseInt(1);
                            Total2 = parseInt(Total2) + parseInt(1);
                            $(this).siblings('input').val(valor1);
                            $(this).siblings('span').html(valor1);
                            $(this).siblings('span').removeClass();
                            $(this).siblings('span').addClass('h' + valor1);
                            $(".total2").html(Total2);
                        }
                    });
                    $(".col2 div").find(".mais").click(function() {
                        var valor1 = $(this).siblings('input').val();
                        //alert(valor1);
                        if (Total2 > 0 && valor1 < 5) {
                            valor1 = parseInt(valor1) + parseInt(1);
                            Total2 = parseInt(Total2) - parseInt(1);
                            $(this).siblings('input').val(valor1);
                            $(this).siblings('span').html(valor1);
                            $(this).siblings('span').removeClass();
                            $(this).siblings('span').addClass('h' + valor1);
                            $(".total2").html(Total2);
                        }
                    });



                    $(".col3 div").find(".menos").click(function() {
                        var valor1 = $(this).siblings('input').val();
                        if (valor1 > 1) {
                            valor1 = parseInt(valor1) - parseInt(1);
                            Total3 = parseInt(Total3) + parseInt(1);
                            $(this).siblings('input').val(valor1);
                            $(this).siblings('span').html(valor1);
                            $(this).siblings('span').removeClass();
                            $(this).siblings('span').addClass('h' + valor1);
                            $(".total3").html(Total3);
                        }
                    });
                    $(".col3 div").find(".mais").click(function() {
                        var valor1 = $(this).siblings('input').val();
                        //alert(valor1);
                        if (Total3 > 0 && valor1 < 5) {
                            valor1 = parseInt(valor1) + parseInt(1);
                            Total3 = parseInt(Total3) - parseInt(1);
                            $(this).siblings('input').val(valor1);
                            $(this).siblings('span').html(valor1);
                            $(this).siblings('span').removeClass();
                            $(this).siblings('span').addClass('h' + valor1);
                            $(".total3").html(Total3);
                        }
                    });



                });
            });
        </script>

        <SELECT id="ordem" name="ordem">
            <option value="">Escolha a ordem.</option>

            <option value="1">7/5/3</option>
            <option value="2">7/3/5</option>
            <option value="3">5/3/7</option>
            <option value="4">5/7/3</option>
            <option value="5">3/7/5</option>
            <option value="6">3/5/7</option>
        </SELECT>
        <div class="atributos hidden">
            <div class="col1 left">Pontos: <span class="total1"></span>
                <div>
                    <a href="javascript:void();" class="menos"> Menos </a>
                    <span id="pontos" class="h1">1</span>
                    <input type="hidden" value="1" class="forca">
                    <a href="javascript:void();" class="mais"> Mais </a>

                </div>         
                <div>
                    <a href="javascript:void();" class="menos"> Menos </a>
                    <span id="pontos" class="h1">1</span>
                    <input type="hidden" value="1" class="destreza">
                    <a href="javascript:void();" class="mais"> Mais </a>

                </div>    

                <div>
                    <a href="javascript:void();" class="menos"> Menos </a>
                    <span id="pontos" class="h1">1</span>
                    <input type="hidden" value="1" class="vigor">
                    <a href="javascript:void();" class="mais"> Mais </a>

                </div>    
            </div>

            <div class="col2">Pontos: <span class="total2"></span>
                <div>
                    <a href="javascript:void();" class="menos"> Menos </a>
                    <span id="pontos" class="h1">1</span>
                    <input type="hidden" value="1" class="carisma">
                    <a href="javascript:void();" class="mais"> Mais </a>

                </div>         
                <div>
                    <a href="javascript:void();" class="menos"> Menos </a>
                    <span id="pontos" class="h1">1</span>
                    <input type="hidden" value="1" class="manipulacao">
                    <a href="javascript:void();" class="mais"> Mais </a>

                </div>    

                <div>
                    <a href="javascript:void();" class="menos"> Menos </a>
                    <span id="pontos" class="h1">1</span>
                    <input type="hidden" value="1" class="aparencia">
                    <a href="javascript:void();" class="mais"> Mais </a>

                </div>    
            </div>   
            <div class="col3">Pontos: <span class="total3"></span>
                <div>
                    <a href="javascript:void();" class="menos"> Menos </a>
                    <span id="pontos" class="h1">1</span>
                    <input type="hidden" value="1" class="percepcao">
                    <a href="javascript:void();" class="mais"> Mais </a>

                </div>         
                <div>
                    <a href="javascript:void();" class="menos"> Menos </a>
                    <span id="pontos" class="h1">1</span>
                    <input type="hidden" value="1" class="inteligencia">
                    <a href="javascript:void();" class="mais"> Mais </a>

                </div>    

                <div>
                    <a href="javascript:void();" class="menos"> Menos </a>
                    <span id="pontos" class="h1">1</span>
                    <input type="hidden" value="1" class="raciocinio">
                    <a href="javascript:void();" class="mais"> Mais </a>

                </div>    
            </div>   
        </div>
    </form>
</div>



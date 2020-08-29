<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css_store/app_select.css">
    <script type="text/javascript" src="js_store/jquery.js"></script>
    <title>BOREALCODE</title>
</head>
<body>
    <?php include("../desenvolvedor/header_dev.php"); include("functions_store.php");?>
    <div class="conteudo">
        <section class="head-app">
            <?php 
                session_start(); include("../conexao_banco.php");
                $busca_prog = mysqli_query($conexao, 'SELECT * FROM programas_loja WHERE id = '.$_GET["prog"].'');
                
                if(mysqli_num_rows($busca_prog) > 0){
                    $load = mysqli_fetch_assoc($busca_prog);

                    echo "<img src='icons_store/".$load['icone']."' id='icone'/><label class='info'><p id='title'>".$load['titulo']."</p><p>".$load['plataforma']."</p><p>Desenvolvedor: ".$load['nome_dev']."</p><p>".$load['preco']."</p></label>";               
            ?>
            <?php if(isset($_POST['avaliar'])){
                        avaliacao_programa();
                    }?>
            
            <form method="post" action="app_select.php?prog='<?php echo $_GET["prog"] ?>'">
                <div class="estrelas">
                    <input type="radio" id="vazio" name="estrela" value="" checked="checked">
                    
                    <label for="estrela_um"><i class="fa"></i></label>
                    <input type="radio" id="estrela_um" name="estrela" value="1">

                    <label for="estrela_dois"><i class="fa"></i></label>
                    <input type="radio" id="estrela_dois" name="estrela" value="2">

                    <label for="estrela_tres"><i class="fa"></i></label>
                    <input type="radio" id="estrela_tres" name="estrela" value="3">

                    <label for="estrela_quatro"><i class="fa"></i></label>
                    <input type="radio" id="estrela_quatro" name="estrela" value="4">

                    <label for="estrela_cinco"><i class="fa"></i></label>
                    <input type="radio" id="estrela_cinco" name="estrela" value="5">
                </div>
                <input type="submit" name="avaliar" value="Enviar">
            </form>
        </section>

        <section class="content-app">
            <span class="desc">
            <?php
                echo $load['descricao'];
                }else{
                    echo"Desculpe, produto não encontrado";
                }
            ?>
            </span>
        </section>

        <section class="footer-app">

        </section>
    </div>

    <script>
        $(document).ready(function(){

            var showChar = 250;
            var points = "...";
            var maistext = "Mostrar Mais";
            var menostext = "Mostrar menos";

            $('.desc').each(function(){
                var content = $(this).html();

                if(content.length > showChar){

                    var c = content.substr(0, showChar);
                    var h = content.substr(showChar, content.length - showChar);

                    var html = `${c}<span class="points">${points}&nbsp;</span><span class="moredesc"><span>${h}</span>&nbsp;&nbsp;<a href="" class="morelink">${maistext}</a></span>`;

                    $(this).html(html);
                }
            })

            $(".morelink").click(function(){
                if($(this).hasClass("less")){                   
                    $(this).html(maistext);
                }else{
                    $(this).addClass("less");
                    $(this).html(menostext);
                }
                $(this).parent().prev().toggle();
                $(this).prev().toggle();
                return false;
            })
        })

    </script>
</body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
		<title>CONEC.T - Para Desenvolvedores</title>
		<meta http-equiv="X-UA-Compatible" content="ie=edge">   
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

        <link rel="stylesheet" href="style_index/index_cli.css">
		<link rel="stylesheet" href="style_index/reset.css">
		<link rel="icon" type="imagem/png" href="icones/conec.t-icon-head-web.png">
     
		<link rel="stylesheet" href="style_index/icons_materialize.css">  
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		
		<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    </head>
    <body>
		<div class="container">	
			<div class="row">	
				<!--Nav-->
				<header class="">
					<div class="col-12">
						<a href="index.php"><h1><img src="icones/logo-black.png" alt="CONEC.T"></h1></a>
						<div id="link-ancora">	
							<a href="cliente/cadastro_cli.php" id="criarconta_dev">Inscrever-se agora</a>		
							<a href="index_dev.php" id="paraClientes">Para desenvolvedores</a>   	
						</div>
					</div>			
				</header>	

				<script>
					var cords_offset = $("header").offset().top;
					var menu = $("header");
					$(document).on('scroll', function(){
						if(cords_offset >= $(window).scrollTop()){	
							menu.removeClass('fixarMenu');
						}else{
							menu.addClass('fixarMenu');
						}
					});
				</script>

                <div class="principal-screen">
					<div class="mais-top">
						<div class="text-left col-sm-5 col-md-5 col-lg-5 float-left">
							<h1>
								<b id="bol-cli">Um</b> lugar <b id="bol-cli">ideal</b> para <label>COMPARTILHAR</label>
							
								informações sobre <b>tecnologia</b>,
								e realizar a criação 
								de projetos <b id="bol-cli">com a ajuda 
								de programadores</b>.
							</h1>	
						</div>
						<img class="img-right col-sm-7 col-md-7 col-lg-7 float-right" src="icones/img-10.png">
					</div>
					<div id="more">
						<p id="txt_more">Conheça Mais</p>
						<p id="icon_more"><span class="material-icons">expand_more</span></p>
					</div>
                </div>	

				<div class="session-1">
					<div class="float-right col-sm-5 col-md-5 col-lg-5">
						<p id="icon_text"><img src="icones/img-18.png"></p>
						<h2>Anuncie o seu projeto</h2>
						<p id="text">Publique a ideia do seu projeto na área 
							de demandas e escolha um desenvolvedor 
							para começar a criação o seu programa,
							aplicativo ou jogo. Descreva o titulo do , o objetivo</p>
					</div>
					<img class="img_position col-sm-7 col-md-7 col-lg-7 float-left" src="icones/img-15.png">
				</div>

				<div class="container-flex background-session-2">
					<div class="session-2">
						<div class="float-left col-sm-5 col-md-5 col-lg-5">
							<p id="icon_text"><img src="icones/img-19.png"></p>
							<h2>Explore a loja da CONEC.T</h2>
							<p id="text">Aproveite e acompanhe os melhores produtos 
							da Loja da CONEC.T, feito por desenvolvedores.
							Veja os programadores que se destacam por suas
							criações.</p>
						</div>
						<img class="img_position col-sm-7 col-md-7 col-lg-7 float-right" src="icones/img-15.png">
					</div>	
				</div>

				<div class="session-final col-12">
					<p>VENHA DESCUBRIR</br>UMA SOCIEDADE INOVADORA</p>
					<p><a href="#">Inscrever-se como cliente</a></p>
				</div>			
			</div>
		</div>

		<!--RODAPÉ DA CONEC.T-->
        <?php include("general_footer.html"); ?>
	</body>
</html>
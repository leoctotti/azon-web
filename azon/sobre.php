<!doctype html>
<html>
  <head>
	<?php include('./tpl/head.php') ?>
    <title>Azon © - Sobre</title>
	<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.9"></script>
  </head>

  <body>

	<nav class="navbar navbar-expand-md fixed-top" style="background-color: #262626;">
    <div class="container">
        <a class="navbar-brand" href="/">
		<img src="./img/logo-200px.png" style="max-height: 65px;"/>
		</a>
			<div id="burger" onclick="burgerAnimation()" class="burger burger-squeeze burger-right navbar-toggle" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
			  <div class="burger-lines"></div>
			</div>
        <div class="collapse navbar-collapse" id="navigation">
		  <ul class="mr-auto"></ul>
          <ul class="navbar-nav navbar-right">
                <li class="nav-item"><a class="nav-link" href="./"><span class="label label-nav label-custom-icon"><i class="fa fa-home"></i></span> Início</a></li>
                <li class="nav-item"><a class="nav-link active" href="./sobre"><span class="label label-nav label-custom-icon"><i class="fa fa-bar-chart"></i></span> Sobre</a></li>
				<li class="nav-item"><a class="nav-link" href="./equipe"><span class="label label-nav label-custom-icon"><i class="fa fa-users"></i></span> Equipe</a></li>
                <li class="nav-item"><a class="nav-link" href="./contato"><span class="label label-nav label-custom-icon"><i class="fa fa-phone"></i></span> Contato</a></li>	
            </ul>
        </div>
        </div>
    </nav>
	
    <?php include('./tpl/header.php') ?>
    
    <div class="container page-start" style="margin-bottom: 50px;">
        <div class="row">
            <div class="col-md-12 text-center align-middle" data-aos="fade-right">
                <h1 class="contact-title">Sobre nós</h1>
            </div>
        </div>
        <div class="row page-start">
            <div class="col-md-6 about-pag-mobile" data-aos="flip-right">
                <h2 class="about-title">Nossa história</h2>
                <p class="p-justify">A Azon está há 3 anos no mercado de desenvolvimento Web e Aplicativos. Tudo começou com Pedro Santos, seu notebook, um servidor e um navegador, quando mostrou sua paixão pela área programação web, e depois de 3 anos estudando o mercado financeiro transformou a Azon Desenvolvimento Digital hoje na 3º maior empresa do ramo em Primavera do Leste e 7º de todo o Mato Grosso.</p>
            </div>
            <div class="col-md-6" data-aos="flip-left">
            <h2 class="about-title">Nosso futuro</h2>
            <p class="p-justify">Fazemos o nosso melhor para todos enquanto encaminhamos o mundo da tecnologia para um futuro melhor seguindo nosso lema “mais recomendações e menos reclamações”. Então, para o fazê-lo, no futuro pretendemos nos tornar a maior empresa de Marketing e Desenvolvimento Digital do Brasil.</p>
            </div>
        </div>
        <div class="row page-start">
            <div class="col-md-6 about-pag-mobile" data-aos="flip-right">
                <h2 class="about-title">Nossa missão e visão</h2>
                <p class="p-justify">A Azon existe com a missão de desenvolver os clientes digitalmente, tendo como visão o uso de ferramentas que a internet oferece para alcançarmos o cumprimento da missão.</p>
            </div>
            <div class="col-md-6" data-aos="flip-left">
            <h2 class="about-title">Nossos valores</h2>
            <p class="p-justify">Priorizar o cliente;</p>
            <p class="p-justify">Humildade;</p>
            <p class="p-justify">Fazer o cliente ir além.</p><br><br>
            </div>
        </div>
    </div>

    <?php include('./tpl/footer.php') ?>

<?php include('./tpl/scripts-footer.php') ?>

</body>
</html>

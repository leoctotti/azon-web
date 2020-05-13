<!doctype html>
<html>
  <head>
	<?php include('./tpl/head.php') ?>
    <title>Azon © - Equipe</title>
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
                <li class="nav-item"><a class="nav-link" href="./sobre"><span class="label label-nav label-custom-icon"><i class="fa fa-bar-chart"></i></span> Sobre</a></li>
				<li class="nav-item"><a class="nav-link active" href="./equipe"><span class="label label-nav label-custom-icon"><i class="fa fa-users"></i></span> Equipe</a></li>
                <li class="nav-item"><a class="nav-link" href="./contato"><span class="label label-nav label-custom-icon"><i class="fa fa-phone"></i></span> Contato</a></li>	
            </ul>
        </div>
        </div>
    </nav>
	
<?php include('./tpl/header.php') ?>

    <div class="container page-start">
        <div class="row text-center align-middle">
            <div class="col-md-12">
                <h1 class="contact-title">Nossa Equipe</h1>
            </div>
        </div>
        <div class="row page-start text-center align-middle">
            <div class="col-md-6">
            <img src="./img/equipe/undefined.png" alt="???" width="100%" height="310px">
                <p class="equipe-img-title">???</p>
            </div>
            <div class="col-md-6">
            <img src="./img/equipe/undefined.png" alt="???" width="100%" height="310px">
                <p class="equipe-img-title">???</p>
            </div>
        </div>
        <div class="row text-center page-start">
            <div class="col-md-4">
            <img src="./img/equipe/undefined.png" alt="???" width="100%" height="310px">
                <p class="equipe-img-title">???</p>
            </div>
            <div class="col-md-4">
            <img src="./img/equipe/undefined.png" alt="???" width="100%" height="310px">
                <p class="equipe-img-title">???</p>
            </div>
            <div class="col-md-4">
            <img src="./img/equipe/undefined.png" alt="???" width="100%" height="310px">
                <p class="equipe-img-title">???</p>
            </div>
        </div>
        <div class="row text-center page-start">
            <div class="col-md-4">
            <img src="./img/equipe/undefined.png" alt="???" width="100%" height="310px">
                <p class="equipe-img-title">???</p>
            </div>
            <div class="col-md-4">
            <img src="./img/equipe/undefined.png" alt="???" width="100%" height="310px">
                <p class="equipe-img-title">???</p>
            </div>
            <div class="col-md-4">
            <img src="./img/equipe/undefined.png" alt="???" width="100%" height="310px">
                <p class="equipe-img-title">???</p>
            </div>
        </div>
    </div>
    <br><br><br>

<?php include('./tpl/footer.php') ?>

	<?php include('./tpl/scripts-footer.php') ?>
	
  </body>
</html>
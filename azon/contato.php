<!doctype html>
<html>
  <head>
	<?php include('./tpl/head.php') ?>
    <title>Azon © - Contato</title>
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
				<li class="nav-item"><a class="nav-link" href="./equipe"><span class="label label-nav label-custom-icon"><i class="fa fa-users"></i></span> Equipe</a></li>
                <li class="nav-item"><a class="nav-link active" href="./contato"><span class="label label-nav label-custom-icon"><i class="fa fa-phone"></i></span> Contato</a></li>	
            </ul>
        </div>
        </div>
    </nav>
	
    <?php include('./tpl/header.php') ?>

    <div class="container page-start">
        <div data-aos="flip-up">
            <h1 class="contact-title text-center align-middle">Contato</h1>
        </div>
        <div class="row page-start">
<div class="col-md-6" data-aos="fade-up-right">
    <?php
		// Testando envio de emails pelo formulário de contato.
    if (isset($_POST['BTEnvia'])) {
 
        //Variaveis de POST
        //====================================================
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $email = $_POST['email'];
        $assunto = $_POST['assunto'];
        $msg = $_POST['textArea'];
        //====================================================
        
        //REMETENTE
        //==================================================== 
        $email_remetente = "...";
        //====================================================
        
        //Configurações do email, ajustar conforme necessidade
        //==================================================== 
        $email_destinatario = "...";
        $email_reply = "$email"; 
        $email_assunto = "Contato formmail"
        //====================================================
        
        //Monta o Corpo da Mensagem
        //====================================================
        $email_conteudo = "Nome = $nome \n"; 
        $email_conteudo .= "Email = $email \n";
        $email_conteudo .= "Telefone = $telefone \n"; 
        $email_conteudo .= "Mensagem = $mensagem \n"; 
        //====================================================
        
        //Seta os Headers
        //==================================================== 
        $email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Return-Path: $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
        //====================================================
        
        //Enviando o email 
        //==================================================== 
        if (mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)){ 
        echo "</b>E-mail enviado com sucesso!</b>"; 
        } 
        else{ 
        echo "</b>Falha no envio do e-mail!</b>"; } 
        //====================================================
       } 
       ?>
 <form action="<?php $PHP_SELF; ?>" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nome">Nome</label>
      <input type="text" class="form-control" required id="nome" name="nome" placeholder="Primeiro nome">
    </div>
    <div class="form-group col-md-6">
      <label for="sobrenome">Sobrenome</label>
      <input type="text" class="form-control" required id="sobrenome" name="sobrenome" placeholder="Segundo nome">
    </div>
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" required id="email" name="email" placeholder="Seu melhor email">
  </div>
    <div class="form-group">
      <label for="assunto" name="assunto">Assunto</label>
      <select id="assunto" name="assunto" class="form-control">
        <option selected>Escolha...</option>
        <option>Desenvolvimento de Sites</option>
        <option>Desenvolvimento de Aplicativos</option>
        <option>Gestão Social</option>
        <option>Otimização Digital</option>
        <option>Divulgações</option>
        <option>Sistemas de Gestão</option>
        <option>Outro</option>
      </select>
    </div>
    <div class="form-group">
    <label for="textArea">Mensagem</label>
    <textarea placeholder="Sua mensagem" class="form-control" required id="textArea" name="textArea" rows="3"></textarea>
  </div>
  <div class="form-group align-button-mobile">
  <button type="submit" name="enviaDados" class="btn btn-grad">Enviar</button>
  </div>
</form><br><br><br>

            </div>
            <div class="col-md-6 text-center" data-aos="zoom-out-left">
                <img src="./img/web-design.png" alt="Web Design" width="80%"><br><br><br>
            </div>
        </div>
    </div>
    
	<?php include('./tpl/footer.php') ?>

	<?php include('./tpl/scripts-footer.php') ?>
	
  </body>
</html>
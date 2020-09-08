<?php
session_start();
?>


<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro Meu Diário</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
 <!-- Hero head: will stick at the top -->
  <div class="hero-head">
    <header class="navbar">
      <div class="container">
        <div class="navbar-brand">
          <a class="navbar-item">
            <h1 class="title has-text-white" style="font-family:'Brush Script MT'">Meu Diário</h1>
          </a>
          <span class="navbar-burger burger" data-target="navbarMenuHeroC">
            <span></span>
            <span></span>
            <span></span>
          </span>
        </div>
        <div id="navbarMenuHeroC" class="navbar-menu">
          <div class="navbar-end">
            <a class="navbar-item is-active">
              Acessar
            </a>
            <a class="navbar-item">
              Página Inicial
            </a>
            <a class="navbar-item">
              Primeiro Contato
            </a>
            <span class="navbar-item">
              <a class="button is-success is-inverted">
                <span class="icon">
                  <i class="fab fa-github" class="active"></i>
                </span>
                Cadastre-se!
              </a>
            </span>
          </div>
        </div>
      </div>
    </header>
  </div>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                     <img src="img/logo.png" style="width:50%" alt="Logo-Meu Diário" max-width="100%" cursor="pointer">
                    <h1 class="title has-text-white" style="font-family:'Arial Narrow'">Cadastre-se</h1>
                    <?php 
                    if(isset($_SESSION['status_cadastro'])):
                    ?>
                    <div class="notification is-success">
                      <p>Cadastro efetuado!</p>
                      <p> Para acessar o seu painel, clique <a href="login.php">AQUI</a> e informe o seu usuário e senha!</p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['status_cadastro']);
                    ?>
                    <?php
                    if(isset($_SESSION['usuario_existe'])):
                    ?>
                    <div class="notification is-danger">
                        <p>O usuário escolhido já existe! Vamos criar outro?</p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['usuario_existe']);
                    ?>
                    <div class="box">
                        <form action="cadastrar.php" method="POST" autocomplete="off">
                            <div class="field">
                                <div class="control">
                                    <input name="nome" type="text" class="input is-large" placeholder="Nome" autofocus>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="usuario" type="text" class="input is-large" placeholder="Usuário">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="senha" class="input is-large" type="password" placeholder="Senha">
                                </div>
                            </div>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth" style="background: #2e8b57">Cadastrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
<footer class="bg-success">
            <div class="container">
            <div class="col-md-12" align="center">
                        <img id="imagem" src="img/logo.png" class="img-resize img-responsive hidden-xs img-thumbnial" width="100" height="100" alt="Meu Diário" title= "Meu Diário"" /> 
                        <h5 class="meu-diario"><strong> Meu Diário </strong></h5>
                    </div><br>
                            
            <div class="container">
            <p align="center"> MVP Mega Hack Woman | 2020 </p> 
            </div>
        </footer>
</body>

</html>
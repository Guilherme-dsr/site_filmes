<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<meta charset="utf-8">
<head>
	<title>Drive Filmes - Login</title>
    <link rel="shortcut icon" href="img/512x512.png" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
	<div class="container-fluid">
  <div class="row no-gutter">
    <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"><img src="img/fundo1.png" height="787" width="742"></div>
    <div class="col-md-8 col-lg-6">
      <div class="login d-flex align-items-center py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-lg-8 mx-auto">
              <h3 class="login-heading mb-4">Login</h3>
              <form action="php/valida.php" method="post">
                <div class="form-label-group">
                  <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" required autofocus>
                  <label for="inputEmail">Email</label>
                </div>

                <div class="form-label-group">
                  <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="senha" required>
                  <label for="inputPassword">Senha</label>
                </div>

                <div class="custom-control custom-checkbox mb-3">
                  <input type="checkbox" class="custom-control-input" id="customCheck1">
                  <label class="custom-control-label" for="customCheck1">Lembrar Senha</label>
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit" style="background-color: #05C7F2">Entrar</button>
                <div class="text-center">
                  <a class="small" href="cadastro.php">Ainda não é cadastrado?</a></div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
        <p>
            <?php 
      //Recuperando o valor da variável global, os erro de login.
      if(isset($_SESSION['loginErro'])){
                echo $_SESSION['loginErro'];
                unset($_SESSION['loginErro']);
            }?>
        </p>
</body>
</html>
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
              <h3 class="login-heading mb-4">Cadastro</h3>


              <form action="php/salvar.php" method="post">

                 <div class="form-label-group">
                  <input type="text" id="inputNome" class="form-control" placeholder="text" required autofocus autocomplete="off" name="nome">
                  <label for="text">Nome</label>
                </div>

                <div class="form-label-group">
                  <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus autocomplete="off" name="email">
                  <label for="inputEmail">Email</label>
                </div> 

                <div class="form-label-group">
                  <input type="password" id="inputPassword" class="form-control" placeholder="password" required autofocus autocomplete="off" name="senha">
                  <label for="inputPassword">Senha</label>
                </div>

                <div class="form-label-group">
                  <input type="password" id="input_C_Password" class="form-control" placeholder="confirm_password" required autofocus autocomplete="off">
                  <label for="inputPassword">Confirmar senha</label>
                </div>

                <!-- Default unchecked Free-->
                  <div class="custom-control custom-radio">
                     <input type="radio" class="custom-control-input" id="defaultUnchecked" name="defaultExampleRadios">
                     <label class="custom-control-label" for="defaultUnchecked">Free</label>
                  </div>

                  <!-- Default checked (Premium) -->
                  <div class="custom-control custom-radio">
                     <input type="radio" class="custom-control-input" id="defaultChecked" name="defaultExampleRadios" checked>
                    <label class="custom-control-label" for="defaultChecked">Premium (4,99 R$)</label>
                  </div>


                <br><button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit" style="background-color: #05C7F2">Cadastrar</button>
                <div class="text-center">
                  <!-- <a class="small" href="#">Ainda não é cadastrado?</a></div> -->
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  var password = document.getElementById("inputPassword")
  , confirm_password = document.getElementById("input_C_Password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Senhas não correspondentes!");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>




</body>
</html>
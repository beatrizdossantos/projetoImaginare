<?php 
header('content-type: text/html; charset:utf-8');

session_start();
if((!isset($_SESSION['codAdmin'])==true) and (!isset($_SESSION['nome'])==true) and (!isset($_SESSION['email'])==true)) {
  unset($_SESSION['codLeitor']);
  unset($_SESSION['nome']);
  unset($_SESSION['email']);
  header('Location: login.html');
}

include 'conecta.php';
?>

<!DOCTYPE html>
<html>
<head>

 <!-- Favicons -->
<link href="img/favicon.png" rel="icon">
<link href="img/apple-touch-icon.png" rel="apple-touch-icon"> 


  <title>Perfil</title>
  <link href="css/style.css" rel="stylesheet">

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
    <header id="header">

    <div id="topbar">
      <div class="container">
        <div class="social-links">
          <a href="https://www.facebook.com/Imaginare-2277738809115908/" class="facebook"><i class="fa fa-facebook"></i></a>
          <!--<a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>-->
          <a href="https://www.instagram.com/_imaginare_/" class="instagram"><i class="fa fa-instagram"></i></a>
        </div>
      </div>
    </div>

    <div class="container">

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <h1 class="text-light"><a href="index.php" class="scrollto"><span>Imaginare</span></a></h1>
        <!-- <a href="#header" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a> -->
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php#intro">Home</a></li>
          <li><a href="index.php#about">Sobre</a></li>
          <li><a href="index.php#services">Diferenciais</a></li>
          <li><a href="index.php#team">Desenvolvedores</a></li>
          <li class="drop-down"><a href="">Começar</a>
            <ul>
              <li class="drop-down"><a href="#">Ler</a>
              <ul>
                  <li><a href="#">Romance</a></li>
                  <li><a href="#">Fantasia</a></li>
                  <li><a href="#">Terror</a></li>
                  <li><a href="#">Suspense</a></li>
                  <li><a href="#">Outros Obviamente</a></li>
                </ul></li>
              <li><a href="#">Publicar</a>
              </li>
              <li><a href="#">Política de Privacidade</a>
              <li><a href="#">Termos e Condições de Uso</a>
            </ul>
          </li>
          <li><a href="#footer">Contate-nos</a></li>
          <li class="drop-down"><img src="img/user.png" alt="foto do usuário" class="img-fluid"> 
          <ul>
              <li><a href="perfilAdm.php">Perfil</a>
              <li><a href="#">Biblioteca</a>
              <li><a href="sair.php">Logout</a></li>  
          </ul>    
          </li>
        </ul>
      </nav><!-- .main-nav -->

    </div>
  </header>
  <br><br><br>



  <br>  
        <br>  
        <br>    


          <?php
            $codAdmin = $_SESSION['codAdmin'];
            $consulta = "SELECT * FROM administradores WHERE codAdmin = $codAdmin";
            foreach ($conexao -> query($consulta) as $linha){
          ?>

<div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card card-signin flex-row my-5">
          <div class="card-img-left d-none d-md-flex">
             <!-- Background image for card set in CSS! -->
          </div>
          <div class="card-body">
            <h5 class="card-title text-center">Atualize seus Dados</h5>

            <form class="form-signin" action="atualizaadm2.php" method="POST">

              <div class="form-label-group">
                <input name="codAdmin" type="text" value="<?php echo "{$linha['codAdmin']}"; ?>" id="last_name" class="form-control" placeholder="Insira aqui sua nova condição" required autofocus readonly="readonly">
                <label for="last_name">Código do Administrador</label>
              </div>
              
              <div class="form-label-group">
                <input name="nome_novo" type="text" value="<?php echo "{$linha['nome']}"; ?>" id="last_name" class="form-control" placeholder="Insira aqui sua nova condição" required>
                <label for="last_name">Nome</label>
              </div>
              
              <div class="form-label-group">
                <input name="anoNasc_novo" type="text" value="<?php echo "{$linha['anoNasc']}"; ?>" id="phone" class="form-control" placeholder="Insira o dia em que você nasceu" required>
                <label for="phone">Ano de Nascimento</label>
              </div>
              
              <div class="form-label-group">
                <input name="mesNasc_novo" type="text" value="<?php echo "{$linha['mesNasc']}"; ?>" id="email" class="form-control" placeholder="Insira o mês em que você nasceu" required>
                <label for="email">Mês de Nascimento</label>
              </div>

              <div class="form-label-group">
                <input name="diaNasc_novo" type="text" value="<?php echo "{$linha['diaNasc']}"; ?>" id="location" class="form-control" placeholder="Digite sua nova senha novamente" required>
                <label for="email">Dia do Nascimento</label>
              </div>

              <div class="form-label-group">
                <input name="email_novo" type="text" value="<?php echo "{$linha['email']}"; ?>" id="mobile" class="form-control" placeholder="Digite sua nova senha" required>
                <label for="mobile">Email</label>
              </div>

              <div class="form-label-group">
                <input name="senha_nova" type="text" value="<?php echo "{$linha['senha']}"; ?>" id="location" class="form-control" placeholder="Digite sua nova senha novamente" required>
                <label for="email">Senha</label>
              </div>

              <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit" name="atualizar" value="ATUALIZAR">Atualizar</button>

              <hr class="my-4">

              <?php
                      }
                    ?>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>














                </body>
</html>
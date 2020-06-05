<?php 
header('content-type: text/html; charset:utf-8');

session_start();

include 'conecta.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>Imaginare</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/stylee.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Rapid
    Theme URL: https://bootstrapmade.com/rapid-multipurpose-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>
  <!--==========================
  Header
  ============================-->
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
        <h1 class="text-light"><a href="indexAdm.php" class="scrollto"><span>Imaginare</span></a></h1>
        <!-- <a href="#header" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a> -->
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li ><a href="index.php #intro">Home</a></li>
          <li><a href="index.php #about">Sobre</a></li>
          <li><a href="index.php #services">Diferenciais</a></li>
          <li><a href="index.php #team">Desenvolvedores</a></li>
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
              <li><a href="perfiladm.php">Perfil</a>
              <li><a href="adm.php">Painel de Controle</a>
              <li><a href="#">Biblioteca</a>
              <li><a href="sair.php">Logout</a></li>  
          </ul>    
          </li>
        </ul>
      </nav><!-- .main-nav -->

    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  
            <section id="services" class="section-bg">
      <div class="container">

        <header class="section-header">
          <br><br><br><h3>Informações Pessoais</h3><br>
          
        </header>

        <?php
            $codAdmin = $_SESSION['codAdmin'];
            $consulta = "SELECT * FROM administradores WHERE codAdmin = $codAdmin";
            foreach ($conexao -> query($consulta) as $linha){
          ?>

        <div class="row">

          <div  data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">

                  <form class="form" action="atualizaperfiladm.php" method="post" id="registrationForm">
                      <div class="form-group">
              
              <h4 class="title"><a>Nome de Usuário</a></h4>
              <h2><?php echo "{$linha['nome']}"; ?></h2>
            </div>
          </div>

          <div  data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
              
              <h4 class="title"><a>Email</a></h4>
              <h2><?php echo "{$linha['email']}"; ?></h2>
            </div>
          </div>

           <div  data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              
              <h4 class="title"><a>Senha</a></h4>
              <h2><?php echo "{$linha['senha']}"; ?></h2>
            </div>
          </div>

          <div  data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              
              <h4 class="title"><a>Dia do Nascimento</a></h4>
              <h2><?php echo "{$linha['diaNasc']}"; ?></h2>
            </div>
          </div>

          <div  data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              
              <h4 class="title"><a>Mês do Nascimento</a></h4>
              <h2><?php echo "{$linha['mesNasc']}";?></h2>
            </div>
          </div>

          <div  data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
              
              <h4 class="title"><a>Ano do Nascimento</a></h4>
              <h2><?php echo "{$linha['anoNasc']}";?></h2>
            </div>
          </div>

        </div>

      </div>
      <?php
                      }
                    ?>
    </section>

<section id="intro" class="col-md-12 col-lg-12">
    <div class="container d-flex h-100">
        <div class="col-md-6 intro-info order-md-first order-last">
          <h2>Suas Informações<span><br>

            
          <div>
            <a href="atualizaperfiladm.php?codAdmin= <?php echo " {$linha['codAdmin']}"; ?>" class="btn-get-started scrollto">Atualizar</a>

            <a href="deleteadm.php?codAdmin= <?php echo " {$linha['codAdmin']}"; ?>" class="btn-get-started scrollto">Deletar Conta</a>
          </div>
         
          </span></h2>
          
        </div>
  
        <div class="col-md-3 intro-img order-md-last order-first">
          <img src="img/fundo_transparente.png" alt="" class="img-fluid">
        </div>
      </div>

    </div>
  </section><!-- #intro -->





 
  <!--==========================
    Footer
  ============================-->
  <footer id="footer" class="section-bg">
    <div class="footer-top">
      <div class="container">

        <div class="row">

          <div class="col-lg-6">

            <div class="row">

                <div class="col-sm-6">

                  <div class="footer-info">
                    <h3>Imaginare</h3>
                    <p>Sobre o Imaginare
Somos estudantes apaixonados por livros, que tiveram a oportunidade de passar essa paixão de modo prático para as pessoas.</p>
                  </div>

                  <!--<div class="footer-newsletter">
                    <h4>Our Newsletter</h4>
                    <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum dolore legam minim quorum culpa amet magna export quem.</p>
                    <form action="" method="post">
                      <input type="email" name="email"><input type="submit"  value="Subscribe">
                    </form>
                  </div>-->

                </div>

                <div class="col-sm-6">
                  <div class="footer-links">
                    <h4>Links para as Páginas </h4>
                    <ul>
                      <li><a href="#intro">Home</a></li>
                      <li><a href="#about">Sobre</a></li>
                      <li><a href="#services">Diferenciais</a></li>
                      <li><a href="#">Termos de Uso</a></li>
                      <li><a href="#">Política de Privacidade</a></li>
                    </ul>
                  </div>

                  <div class="footer-links">
                    <h4>CONTATE-NOS</h4>
                    <p>
                      R. Bélgica, Jd. Alvorada  <br>
                      Ribeirão Pires, SP 09402-060<br>
                      Brasil <br>
                      <strong>Telefone</strong>  (11) 4825-4470<br>
                      <strong>Email:</strong> projeto.imaginare@gmail.com<br>
                    </p>
                  </div>

                  <div class="social-links">
                    <a href="https://twitter.com/Imaginare1" class="twitter"><i class="fa fa-twitter"></i></a>
                    <a href="https://www.facebook.com/Imaginare-2277738809115908/" class="facebook"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.instagram.com/_imaginare_/" class="instagram"><i class="fa fa-instagram"></i></a>
                    <!--<a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>-->
                  </div>

                </div>

            </div>

          </div>

          <div class="col-lg-6">

            <div class="form">
              
              <h4>Envie uma mensagem.</h4>
              <p>Não hesite em nos ligar ou apenas use o formulário de contato abaixo</p>
              <form action="" method="post" role="form" class="contactForm">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nome" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Assunto" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Mensagem"></textarea>
                  <div class="validation"></div>
                </div>

                <div id="sendmessage">Sua mensagem foi enviada. Obrigado!</div>
                <div id="errormessage"></div>

                <div class="text-center"><button type="submit" title="Send Message">Enviar Mensagem</button></div>
              </form>
            </div>

          </div>

          

        </div>

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Rapid</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Rapid
        -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/mobile-nav/mobile-nav.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>

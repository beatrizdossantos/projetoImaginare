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
  <link href="css/style.css" rel="stylesheet">

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
        <h1 class="text-light"><a href="#intro" class="scrollto"><span>Imaginare</span></a></h1>
        <!-- <a href="#header" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a> -->
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="#intro">Home</a></li>
          <li><a href="#about">Sobre</a></li>
          <li><a href="#services">Diferenciais</a></li>
          <li><a href="#team">Desenvolvedores</a></li>
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
  <section id="intro" class="clearfix">
    <div class="container d-flex h-100">
      <div class="row justify-content-center align-self-center">
        <div class="col-md-6 intro-info order-md-first order-last">
          <h2>Seja bem vindo<span><br>
            <?php echo $_SESSION ['nome'];?>
          !</span></h2>
          
        </div>
  
        <div class="col-md-6 intro-img order-md-last order-first">
          <img src="img/fundo_transparente.png" alt="" class="img-fluid">
        </div>
      </div>

    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">

      <div class="container">
        <div class="row">

          <div class="col-lg-5 col-md-6">
            <div class="about-img">
              <img src="img/fotolivro1.jpg" alt="livros empilhados">
            </div>
          </div>

          <div class="col-lg-7 col-md-6">
            <div class="about-content">
              <h2>SOBRE O IMAGINARE</h2>
              <h3>Plataforma completa e interativa aguardando sua leitura!</h3>
              <p>O projeto Imaginare, foi criado com o intuito de desenvolver uma plataforma totalmente adaptável de acordo com o usuário que a estiver utilizando.</p>
              <p>Nossa ideia original surgiu por meio da proposta de produzir o Pré-TCC, onde poderíamos o iniciar do zero, com propostas que ajudariam de alguma forma sas ODS's, e que fosse algo novo no mercado.</p>
              <p>Juntamente com o auxílio de nossos professores Cíntia Pinho e Anderson Vanin, produzimos nosso site, com o objetivo de atender todas as necessidades de nossos usuários, e para incentivar o hábito da leitura.</p>
            </div>
          </div>
        </div>
      </div>

    </section><!-- #about -->


    <!--==========================
      Services Section
    ============================-->
    <section id="services" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3>DIFERENCIAIS</h3>
          <p>Por que ler em nossa plataforma? É simples!</p>
        </header>

        <div class="row">

          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #fceef3;"><i class="ion-ios-analytics-outline" style="color: #ff689b;"></i></div>
              <h4 class="title"><a href="">Diga não ao Plágio</a></h4>
              <p class="description">Todos os livros passam pelos desenvolvedores, que avaliam o conteúdo e não permitem a realização deste crime, muito rude, aliás.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #fff0da;"><i class="ion-ios-bookmarks-outline" style="color: #e98e06;"></i></div>
              <h4 class="title"><a href="">Personalize as suas leituras</a></h4>
              <p class="description">Você tem o direito de escolher o que quer ler e o que quer ver. Liberdade e bom senso unidos, jamais serão vencidos.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #e6fdfc;"><i class="ion-ios-paper-outline" style="color: #3fcdc7;"></i></div>
              <h4 class="title"><a href="">Ganhe dinheiro com a sua Escrita</a></h4>
              <p class="description">Você se familiariza com o mundo autoral? Aqui você pode ganhar dinheiro de acordo com seus requisitos *</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #eafde7;"><i class="ion-ios-speedometer-outline" style="color:#41cf2e;"></i></div>
              <h4 class="title"><a href="">Histórias em Quadrinhos</a></h4>
              <p class="description">Aqui você também tem acesso à HQ's de primeira!</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #e1eeff;"><i class="ion-ios-world-outline" style="color: #2282ff;"></i></div>
              <h4 class="title"><a href="">Áudio Books</a></h4>
              <p class="description">Incentivo à leitura e disponibilidade de livros para todos amantes da literatura.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #ecebff;"><i class="ion-ios-clock-outline" style="color: #8660fe;"></i></div>
              <h4 class="title"><a href="">Fórum</a></h4>
              <p class="description">Espaço amigável e sem spoilers para conversas entre leitores!</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #services -->

    <!--==========================
      Why Us Section
    ============================-->
    <section id="why-us" class="wow fadeIn">
      <div class="container-fluid">
        
        <header class="section-header">
          <h3>Nossa Inspiração</h3>
          <p>Um ambiente para todos!</p>
        </header>

        <div class="row">

          <div class="col-lg-5">
            <div class="why-us-img">
              <img src="img/sobre.jpg" alt="" class="img-fluid">
            </div>
          </div>

          <div class="col-lg-6">
            <div class="why-us-content">
              <p>Queremos descobrir novos horizontes. A magia da leitura deve ser alcançada por todos,
              não é justo que crianças, jovens e adultos, com deficiências ou não, não possam ter acesso a livros
            de qualidade. Pensando nisto criamos o Imaginare.</p>
              <p>
                Um espaço que se adapta a você, que fornece leituras de qualidade, áudios para os que precisam,
                diálogos que sempre são essenciais (principalmente em momentos que você precisa respirar fundo
                para não surtar), uma forma de começar a ganhar o seu dinheiro e limites inexistentes... claro que para os amigos do bem, se é que me entendem rs.

                
              </p>

              <div class="features wow bounceInUp clearfix">
                <i class="fa fa-diamond" style="color: #f058dc;"></i>
                <h4>Espaço para Diálogo</h4>
                
              </div>

              <div class="features wow bounceInUp clearfix">
                <i class="fa fa-object-group" style="color: #ffb774;"></i>
                <h4>Áudios Books</h4>
                
              </div>
              
              <div class="features wow bounceInUp clearfix">
                <i class="fa fa-language" style="color: #589af1;"></i>
                <h4>Sua escrita é uma obra de arte? Por que não investir nela então?!</h4>
                
              </div>
              
            </div>

          </div>

        </div>

      </div>

      <div class="container">
        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">700</span>
            <p>Leitores</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">421</span>
            <p>Projetos</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">1,364</span>
            <p>Horas de Suporte</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">300</span>
            <p>Opções de Leitura</p>
          </div>
  
        </div>

      </div>
    </section>

    <!--==========================
      Call To Action Section
    ============================-->
    <section id="call-to-action" class="wow fadeInUp">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3 class="cta-title">Crie uma conta!</h3>
            <p class="cta-text"> Comece a ler agora mesmo, mas não se esqueça de se cadastrar, para não perder os registros de sua biblioteca ;)</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="cadastro.php">Cadastrar-se</a>
          </div>
        </div>

      </div>
    </section><!-- #call-to-action -->

    <!--==========================
      Features Section
    ============================-->
    <section id="features">
      <div class="container">

        <div class="row feature-item">
          <div class="col-lg-6 wow fadeInUp">
            <img src="img/features-1.svg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
            <h4>Nosso Fórum</h4>
            <p>
              Sabe quando você está lendo um livro e precisa daquele 1 minuto para se recuperar? 
Então você procura alguém para conversar sobre mas... não tem! 
No Imaginare, cada livro possui o seu fórum online, para haver o diálogo que os leitores tanto precisam!
            </p>
            <p>
              Onde encontrá-lo?
Depois de se cadastrar no nosso site, basta escolher sua leitura.

Um ícone no canto superior, irá levá-lo diretamente ao fórum do livro.

<ul><li>Todos os fóruns são fiscalizados pelos administradores;</li>
<li>Conteúdos ofensivos devem ser reportados;</li>
<li>SEM SPOILERS!</li>
<li>Novas amizades literárias.</li>
            </ul></p>
          </div>
        </div>

        <div class="row feature-item mt-5 pt-5">
          <div class="col-lg-6 wow fadeInUp order-1 order-lg-2">
            <img src="img/features-2.svg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1">
            <h4>Apenas Livros? Não, nós abrangimos HQ's!</h4>
            <p>
             Sempre pensando no bem de nossos usuários, nos demos conta de que não há a abrangencia deste tipo de leitura sendo que as histórias em quadrinhos compõem o quadro dos chamados textos narrativos, onde a história se passa com diferentes tipos de personagens, ocorridas em determinado local, durante certo espaço de tempo.

Geralmente, o objetivo maior é o entretenimento com forma de divertir, causar o humor. 
            </p>
            <p>
             Logo, tudo que é para ser lido é válido, certo?
            </p>
           
          </div>
          
        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Portfolio Section
    ============================-->
     <section id="clients" class="wow fadeInUp">
      <div class="container">
      </div>
    </section>


    <!--==========================
      Clients Section
    ============================-->
    <section id="testimonials">
      <div class="container">

        <header class="section-header">
          <h3>Perspectivas dos Usuários</h3>
        </header>

        <div class="row justify-content-center">
          <div class="col-lg-8">

            <div class="owl-carousel testimonials-carousel wow fadeInUp">
    
              <div class="testimonial-item">
                <img src="img/pessoa1.jpg" class="testimonial-img" alt="">
                <h3>Jean Felipe Felix</h3>
                <h4>Usuário do Imaginare com Deficiência Visual</h4>
                <p>
                  "Eu achei incrível o projeto, com a sua forma de introduzir o mundo da leitura á todos mesmo que possuam deficiência."
                </p>
              </div>
    
              <div class="testimonial-item">
                <img src="img/pessoa2.jpg" class="testimonial-img" alt="">
                <h3>Beatriz dos Santos</h3>
                <h4>Usuária e Desenvolvedora do Imaginare</h4>
                <p>
                  "Criamos esse projeto com o intuito de ajudar as pessoas e facilitar o hábito da leitura á todos, acho que estamos nos saindo bem com esse trabalho!"
                </p>
              </div>
    
              <div class="testimonial-item">
                <img src="img/pessoa3.jpg" class="testimonial-img" alt="">
                <h3>Karina Benevides</h3>
                <h4>Usuária do Imaginare</h4>
                <p>
                  "É um site bem  dinâmico e que atende a diferentes tipos de necessidades."
                </p>
              </div>
    
              <div class="testimonial-item">
                <img src="img/pessoa4.jpg" class="testimonial-img" alt="">
                <h3>Katia Thorschmidt Grenzi</h3>
                <h4>Mãe de criança em alfabetização</h4>
                <p>
                  "Adoro o Projeto Imaginare, pelo incentivo a leitura e principalmente por tratar deste assunto com tanta delicadeza e criatividade. Projeto lindo e inspirador!"
                </p>
              </div>

            </div>

          </div>
        </div>


      </div>
    </section><!-- #testimonials -->

    <!--==========================
      Team Section
    ============================-->
    <section id="team" class="section-bg">
      <div class="container">
        <div class="section-header">
          <h3>DESENVOLVEDORES</h3>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="img/time1.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Beatriz do Santos Silva</h4>
                  <span>Desenvolvedora</span>
                  <div class="social">
                    <a href="https://www.instagram.com/churrinhoz/"><i class="fa fa-instagram"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="img/time2.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Beatriz Ribeiro da Silva</h4>
                  <span>Desenvolvedora</span>
                  <div class="social">
                    <a href="https://www.instagram.com/bia_25ribeiro/"><i class="fa fa-instagram"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="img/time3.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Claudia Galindo Santos</h4>
                  <span>Desenvolvedora</span>
                  <div class="social">
                    <a href="https://www.instagram.com/claudia.galindo/"><i class="fa fa-instagram"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="img/time4.jpeg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Giulia Thorschmidt Prando</h4>
                  <span>Desenvolvedora</span>
                  <div class="social">
                    <a href="https://www.instagram.com/thorschmidt_gg/"><i class="fa fa-instagram"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="img/time5.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Gustavo Ferreira dos Santos</h4>
                  <span>Desenvolvedor</span>
                  <div class="social">
                    <a href="https://www.instagram.com/guh.santoss/"><i class="fa fa-instagram"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
           

          </div>


          </div>


        </div>

      </div>
    </section><!-- #team -->

    <!--==========================
      Clients Section
    ============================-->
    <section id="clients" class="wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Parcerias</h3>
        </header>

        <div class="owl-carousel clients-carousel">
          <img src="" alt="">
          <img src="" alt="">
          <img src="" alt="">
          <img src="" alt="">
          <img src="" alt="">
          <img src="" alt="">
          <img src="" alt="">
          <img src="" alt="">
        </div>

      </div>
    </section><!-- #clients -->


    <!--==========================
      Pricing Section
    ============================-->
    <section id="pricing" class="wow fadeInUp section-bg">

      <div class="container">

        <header class="section-header">
          <h3>Planos</h3>
          <p>***</p>
        </header>

        <div class="row flex-items-xs-middle flex-items-xs-center">
          <!-- Premium Plan  -->
          <div class="col-xs-12 col-lg-12">
            <div class="card">
              <div class="card-header">
                <h3><span class="currency">R$</span>13<span class="period">/Anual</span></h3>
              </div>
              <div class="card-block">
                <h4 class="card-title"> 
                  Plano Premium
                </h4>
                <ul class="list-group">
                  <li class="list-group-item">Livros ilimitados</li>
                  <li class="list-group-item">Acesso a plataforma interativa e adaptável</li>
                  <li class="list-group-item">Espaço aberto para bate-papos</li>
                  <li class="list-group-item">Espaço para novos escritores publicarem seus livros</li>
                </ul>
                <a href="#" class="btn">Assinar Plano</a>
              </div>
            </div>
          </div>
      
        </div>
      </div>

    </section><!-- #pricing -->

    <!--==========================
      Frequently Asked Questions Section
    ============================-->
    <section id="faq">
      <div class="container">
        <header class="section-header">
          <h3>Perguntas Frequentes</h3>
          <p>Abaixo colocaremos frequentes perguntas que nos fazem, juntamente com suas devidas respotas.</p>
        </header>

        <ul id="faq-list" class="wow fadeInUp">
          <li>
            <a data-toggle="collapse" class="collapsed" href="#faq1">Como eu garanto o acesso do meu filho á plataforma? <i class="ion-android-remove"></i></a>
            <div id="faq1" class="collapse" data-parent="#faq-list">
              <p>
                Basta você se cadastrar, colocando o seu filho como o principal usuário e indicando sua condição (criança em alfabetização/se possui algum tipo de deficiência).
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq2" class="collapsed">Tem alguma taxa adicional para o uso dos audiobooks? <i class="ion-android-remove"></i></a>
            <div id="faq2" class="collapse" data-parent="#faq-list">
              <p>
                Não, o valor para a utilização de qualquer parte do site esta inclusa no pacote de R$13,00.
                             </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq3" class="collapsed">Tem alguma idade mínima para acessar o site? <i class="ion-android-remove"></i></a>
            <div id="faq3" class="collapse" data-parent="#faq-list">
              <p>
                Não temos uma idade mínima estipulada, por ser um site de livros. Mas, crianças em processo de alfabetização terão mais dificuldades na hora da çeitura, sendo aconselhado por nós, a presença de um responsável.
              </p>
            </div>
          </li>


        </ul>

      </div>
    </section><!-- #faq -->

  </main>

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

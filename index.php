<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Prefeitura Municipal de Sumaré</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/fonts/fontawesome-webfont.woff?v=4.2.0"> -->
  <!-- <link href=’https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css’ rel=’stylesheet’ type=’text/css’> -->
  <!-- <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  -->
  <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous"> -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- <link href="vendor/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"> -->
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

  <!-- Plugin CSS -->
  <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/creative.css" rel="stylesheet">
  <link href="css/footer.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
  <link rel="stylesheet" href="icons/css/fa-svg-with-js.css">

  
  

</head>

<?php 
require_once('classes/Noticia.php'); 
setlocale( LC_ALL, 'pt_BR', 'pt_BR.iso-8859-1', 'pt_BR.utf-8');
?>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-toggleable-sm navbar-expand-lg fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <img src="img/logo_sumare.png" alt="PMS" style="height: 3.8rem;">
      </a>

      <button class="navbar-toggler"  type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fas fa-align-justify"></span>
      </button>

      <div class="collapse navbar-collapse navLink" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <!--<li class="nav-item">
            <a href="#" class="nav-link">Fanpage</a>
          </li> -->        

          <li class="nav-item">
            <a href="#sectionSecretarias" class="nav-link js-scroll-trigger">Secretarias</a><!-- home    target="blank"-->
          </li>           

          <li class="nav-item">
            <a href="#sec-noti" class="nav-link js-scroll-trigger">Serviços/Noticias</a><!-- home    target="blank"-->
          </li>                

          <li class="nav-item">
            <a href="#pcidadao" class="nav-link js-scroll-trigger">Para o Cidadão</a><!-- home -->
          </li>              

          <li class="nav-item">
            <a href="#pservidor" class="nav-link js-scroll-trigger">Para o Servidor</a><!-- home -->
          </li>                
          
          <li class="nav-item">
            <a href="#contact" class="nav-link js-scroll-trigger">Contato</a><!-- home -->
          </li>                                      
        </ul>
      </div>
    </div>
  </nav>

  <header class="masthead text-center text-white d-flex">
    <div class="container my-auto">
      <div class="row">
        <div class="col-lg-10 mx-auto">
          <h1 class="text-uppercase">
            <strong>Your Favorite Source of Free Bootstrap Themes</strong>
          </h1>
          <hr>
        </div>
        <div class="col-lg-8 mx-auto">
          <p class="text-faded mb-5">Start Bootstrap can help you build better websites using the Bootstrap CSS framework! Just download your template and start going, no strings attached!</p>
          <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Find Out More</a>
        </div>
      </div>
    </div>
  </header>

  <section class="bg-primary" id="about">
    <div class="container">
      <div class="row">

        <div class="col-lg-8 mx-auto text-center">
          <h2 class="section-heading text-white">We've got what you need!</h2>
          <hr class="light my-4">
          <p class="text-faded mb-4">Start Bootstrap has everything you need to get your new website up and running in no time! All of the templates and themes on Start Bootstrap are open source, free to download, and easy to use. No strings attached!</p>
          <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Get Started!</a>
        </div>
      </div>
    </div>
  </section>

  <section id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading">At Your Service</h2>
          <hr id="hr_blue" class="my-4">
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6 text-center">
          <div class="service-box mt-5 mx-auto">
            <!-- <img src="img/calendar.png" width="68" height="68" class="mb-3"> -->
            <i class="far fa-calendar-alt fa-4x text-primary mb-3"></i>
            <h3 class="mb-3">Calendario de Eventos</h3>
            <p class="text-muted mb-0">Our templates are updated regularly so they don't break.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="service-box mt-5 mx-auto">
            <i class="fa fa-4x fa-paper-plane text-primary mb-3"></i>
            <h3 class="mb-3">Ready to Ship</h3>
            <p class="text-muted mb-0">You can use this theme as is, or you can make changes!</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="service-box mt-5 mx-auto">
            <i class="far fa-calendar-alt fa-4x text-primary mb-3"></i>
            <h3 class="mb-3">Up to Date</h3>
            <p class="text-muted mb-0">We update dependencies to keep things fresh.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="service-box mt-5 mx-auto">
            <i class="fa fa-4x fa-heart text-primary mb-3"></i>
            <h3 class="mb-3">Made with Love</h3>
            <p class="text-muted mb-0">You have to make your websites with love these days!</p>
          </div>
        </div>
      </div>
    </div>

  </section>


  <section class="sectionServicosNoticias" id="sec-noti">
    <div class="container-fluid">

      <div class="row">

        <div class="col-sm-12 col-md-12 col-lg-3 text-center">

          <h2 style="color: #fff; margin-bottom: 30px; text-align: left;"><span class="fas fa-id-badge "></span> SERVIÇOS</h2>
          <!-- <hr style="border: .5px solid #fff;">            -->            

          <ul style="text-align: left;">
            <li><a href=""><span class="fas fa-caret-right"></span> SIGISSWEB</a></li>
            <li><a href=""><span class="fas fa-caret-right"></span> GIA-ICMS</a></li>
            <li><a href=""><span class="fas fa-caret-right"></span> PORTAL DA TRANSPARÊNCIA</a></li>
            <li><a href=""><span class="fas fa-caret-right"></span> LICENCIAMENTO AMBIENTAL</a></li>
            <li><a href=""><span class="fas fa-caret-right"></span> HOLERITE WEB</a></li>
            <li><a href=""><span class="fas fa-caret-right"></span> INCLUSÃO SOCIAL</a></li>
            <li><a href=""><span class="fas fa-caret-right"></span> BOLETIM ONLINE</a></li>
            <li><a href=""><span class="fas fa-caret-right"></span> ACESSO A ATRIBUTOS ONLINE</a></li>
            <li><a href=""><span class="fas fa-caret-right"></span> HORÁRIOS DO TRANSPORTE MUNICIPAL</a></li>
            <li><a href=""><span class="fas fa-caret-right"></span>  CONHEÇA SUMARÉ</a></li>
          </ul>
          <div class="mbr-section-btn text-left" id="156" style="margin-top: 40px; margin-left: 40px; margin-bottom: 30px">
            <a href="https://play.google.com/store" target="_blank" class="btn btn-light display-4" style="color: #000">
              MAIS SERVIÇOS
            </a>
          </div>                           
        </div>

        <div class="col-lg-1"></div>

        <div class="col-sm-12 col-md-12 col-lg-8 text-center">
          <h2 style="color: #fff; margin-bottom: 30px; text-align: left;"><span class="fas fa-newspaper"></span> NOTICIAS</h2>

          <div class="row">
            <?php
            require_once 'classes/Noticia.php';
            $titulo = new Noticia();
            $dados = $titulo->buscarDuas();
            ?>

            <div class=" col-sm-12 col-md-5 col-lg-5 card-noticia"  style="min-height: 700px; position: relative;">
              <a href="pages/buscaNoticias.php?id=<?php echo $dados[0][0]['id'];?>" type="submit">
                <div>
                  <div class="row">
                    <div class="col-12" style="height: 250px;">
                      <?php 

                      $pasta = $dados[1][0]['pasta'];
                      $nome = $dados[1][0]['nome'];

                      echo "
                      <img  class='img-fluid rounded img-thumbnail' 
                      src='administracao/files/images/noticias/".$pasta .$nome. "' 
                      style='height: 100%; width: 100%; margin-top: 10px'>
                      ";
                      ?>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-12" style="margin-top: 15px;">
                      <h5 class="card-title"><b><?php
                      $titulo =  utf8_encode($dados[0][0]['titulo']);
                      /*$titulo = str_replace('@@', '“', $titulo);
                      $titulo = str_replace('!!', '”',  $titulo);
                      $titulo = str_replace('!@', '‘', $titulo);
                      $titulo = str_replace('@!', '’', $titulo);
                      $titulo = str_replace('~!', '–', $titulo);*/
                      echo $titulo;

                      ?></b></h5>
                      <br>
                      <h6 class="text-primary"  align="left"><b><?php echo $dados[0][0]['data'];?></b></h6>
                      
                      <p class="card-text"><?php 

                      $not = utf8_encode($dados[0][0]['conteudo']); 
                      /*$not = str_replace('@@', '“', $not);
                      $not = str_replace('!!', '”',  $not);
                      $not = str_replace('!@', '‘', $not);
                      $not = str_replace('@!', '’', $not);      
                      $not = str_replace('~!', '–', $not);  */                                
                      $noti = substr($not, 0, 300+1)."..."; 
                      echo $noti;
                      ?></p> 
                    </div>
                  </div>

                  <div class="col-11" style="position: absolute; bottom: 1px;" align="center">
                    <a href="pages/buscaNoticias.php?id=<?php echo $dados[0][0]['id'];?>" class="btn btn-primary " style="margin-bottom: 10px; margin-left: auto; margin-right: auto;">Ver Mais</a>
                  </div>

                </div>
              </a>
            </div>

            <div class="col-1"></div>

            <div class=" col-sm-12 col-md-5 col-lg-5 card-noticia" style="min-height: 700px; position: relative;">
              <a href="pages/buscaNoticias.php?id=<?php echo $dados[0][1]['id'];?>" type="submit">
                <div>

                  <div class="row">
                    <div class="col-12" style="height: 250px;">                  
                      <?php

                      $pasta = $dados[1][1]['pasta'];
                      $nome = $dados[1][1]['nome'];

                      echo "
                      <img class='img-fluid rounded img-thumbnail' 
                      src='administracao/files/images/noticias/".$pasta .$nome. "' 
                      style='height: 100%;width: 100%; margin-top: 10px'>
                      ";
                      ?>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-12" style="margin-top: 15px;">

                      <h5 class="card-title"><b><?php 
                      $titulo = utf8_encode($dados[0][1]['titulo']); 
                      $titulo = str_replace('@@', '“', $titulo);
                      $titulo = str_replace('!!', '”',  $titulo);
                      $titulo = str_replace('!@', '‘', $titulo);
                      $titulo = str_replace('@!', '’', $titulo);       
                      $titulo = str_replace('~!', '–', $titulo);               
                      echo $titulo;                  

                      ?></b></h5>
                      <br>
                      <h6 class="text-primary"  align="left"><b><?php echo $dados[0][1]['data'];?></b></h6>
                      <p class="card-text"><?php 
                      $not = utf8_encode($dados[0][1]['conteudo']);
                      $not = str_replace('&nbsp;', ' ', $not);
                      $not = str_replace('@@', '“', $not);
                      $not = str_replace('!!', '”',  $not);
                      $not = str_replace('!@', '‘', $not);
                      $not = str_replace('@!', '’', $not);    
                      $not = str_replace('~!', '–', $not);                                    
                      $noti = substr($not, 0, 300+1)."..."; 
                      echo $noti; ?></p>
                    </div>
                  </div>

                  <div class="col-11" style="position: absolute; bottom: 1px;" align="center">
                    <a href="pages/buscaNoticias.php?id=<?php echo $dados[0][1]['id'];?>" class="btn btn-primary " style="margin-bottom: 10px; margin-left: auto; margin-right: auto;">Ver Mais</a>
                  </div>

                </div>
              </a>
            </div>
            <a href="pages/todasNoticias.php" id="btn-noticia" class="btn btn-sm btn-block" style="margin: 30px 0px 0px -30px">Ver Todas As Noticias</a>


          </div>
        </div></div>
      </div>
    </section>




    <section class="secretariasClass" id="sectionSecretarias">
      <div class="container-fluid">
        <div class="row" align="center">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <h2 id='secretarias'><span class="fas fa-list-ul"></span> SECRETARIAS<h2>      
            </div> 
          </div>

          <div class="row" style="margin: 5px 10px 25px 10px;">
            <div class="col-sm-12 col-md-12 col-lg-4 col-secretarias">
              <ul>
                <li><a href="#"><span class="fas fa-chevron-circle-right"></span> Administração e RH</a></li>
                <li><a href="#"><span class="fas fa-chevron-circle-right"></span> Chefia de Gabinete do Município</a></li>
                <li><a href="#"><span class="fas fa-chevron-circle-right"></span> Comunicação Social</a></li>
                <li><a href="#"><span class="fas fa-chevron-circle-right"></span> Controle Interno e Transparência</a></li>
                <li><a href="#"><span class="fas fa-chevron-circle-right"></span> Cultura, Esportes e Lazer</a></li>
                <li><a href="#"><span class="fas fa-chevron-circle-right"></span> Meio Ambiente</a></li>
                <li><a href="#"><span class="fas fa-chevron-circle-right"></span> Desenvolvimento Econômico</a></li>
                <li><a href="#"><span class="fas fa-chevron-circle-right"></span> Desenvolvimento Social</a></li>
              </ul>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4 col-secretarias"> 
              <ul> 
                <li><a href="#"><span class="fas fa-chevron-circle-right"></span> Educação</a></li>
                <li><a href="#"><span class="fas fa-chevron-circle-right"></span> Finanças e Orçamento</a></li>
                <li><a href="#"><span class="fas fa-chevron-circle-right"></span> Fundo Social de Solidariedade</a></li>
                <li><a href="#"><span class="fas fa-chevron-circle-right"></span> Gabinete do Prefeito</a></li>
                <li><a href="#"><span class="fas fa-chevron-circle-right"></span> Gabinete do Vice-Prefeito</a></li>
                <li><a href="#"><span class="fas fa-chevron-circle-right"></span> Gerência de Programas</a></li>
                <li><a href="#"><span class="fas fa-chevron-circle-right"></span> Governo e Participação Cidadã</a></li>
                <li><a href="#"><span class="fas fa-chevron-circle-right"></span> Habitação</a></li>
              </ul>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4 col-secretarias">
              <ul>
                <li><a href="#"><span class="fas fa-chevron-circle-right"></span> Mobilidade Urbana e Rural</a></li>
                <li><a href="#"><span class="fas fa-chevron-circle-right"></span> Obras</a></li>
                <li><a href="#"><span class="fas fa-chevron-circle-right"></span> Planejamento</a></li>
                <li><a href="#"><span class="fas fa-chevron-circle-right"></span> Procuradoria Geral do Município</a></li>
                <li><a href="https://saudecoletiva1.wixsite.com/vigilanciasumare"><span class="fas fa-chevron-circle-right"></span> Saúde</a></li>
                <li><a href="#"><span class="fas fa-chevron-circle-right"></span> Segurança</a></li>
                <li><a href="#"><span class="fas fa-chevron-circle-right"></span> Serviços Públicos</a></li>
                <li><a href="#"><span class="fas fa-chevron-circle-right"></span> SUMPREV</a></li>
              </ul>
              <a href="https://saudecoletiva1.wixsite.com/vigilanciasumare" id="btn-noticia" class="btn btn-sm btn-block" style="margin: 30px 0px 0px -30px">Site da VIGILANCIA</a>
              <!-- (9 8230-4530 - moça da vigilância) -->
            </div>

          </div>

        </div>
      </section>

      <section class="footer text-white" id="contact">
        <div class="container-fluid">
          <div class="row">
            <div id="footer_left_content" align="center" class="col-12 col-md-4 col-lg-4" style="border-radius:8px;border: 3px solid #114065;">
              <p class="mbr-text">
                <br><br>
                <strong>Telefone</strong>
                <br>(19) 3399-5100
                <br><br><br>
                <strong>Endereço</strong>
                <br>Rua Dom Barreto, 1.303
                <br>Centro - Sumaré, SP
              </p>
            </div>

            <div class="offset-md-2 col-12 col-md-6 col-lg-6">
              <iframe class="google-map" frameborder="0" style="border-radius:8px;border: 3px solid #114065;" src="https://www.google.com/maps/embed/v1/place?q=dom%20barreto%201303&key=AIzaSyAeIl5Ozd4jhKbH9gCnyJwvvM7mp6nr_v0" allowfullscreen></iframe>
            </div>
          </div>
          <div class="row" style="padding-top: 1%; padding-bottom: 1%; margin-top: 10px; margin-bottom: 10px;">
            <div class="col-12" style="text-align: center;">
              © Prefeitura Municipal De Sumaré - Tecnologia Sumaré<!-- JMP DEVELOPMENT -->
            </div>
          </div>
        </div>
      </section>

      <!-- Bootstrap core JavaScript -->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

      <!-- Plugin JavaScript -->
      <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
      <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
      <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

      <!-- Custom scripts for this template -->
      <script src="js/creative.min.js"></script>

      <script src="icons/js/fontawesome-all.js"></script>


    </body>

    </html>



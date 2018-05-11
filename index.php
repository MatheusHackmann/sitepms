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
            <a href="#sec-noti" class="nav-link js-scroll-trigger">Noticias</a><!-- home    target="blank"-->
          </li>           

          <li class="nav-item">
            <a href="#sec-serv" class="nav-link js-scroll-trigger">Serviços</a><!-- home    target="blank"-->
          </li>                          


          <li class="nav-item">
            <a href="#sectionSecretarias" class="nav-link js-scroll-trigger">Secretarias</a><!-- home    target="blank"-->
          </li>           

          


          <li class="nav-item">
            <a href="#pcidadao" class="nav-link js-scroll-trigger">Cidadão</a><!-- home   -->
          </li>              

          <li class="nav-item dropdown">
            <a href="#pservidor" id="navbarDropdown" class="nav-link dropdown-toggle " role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Servidor
            </a><!-- home -->

            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#" style="color: #000;"><img style="width: 50px; height: 50px;" src="img/logo@512.png"> &nbsp;&nbsp;Atendimento ao Cidadão (156)</a>
              <a class="dropdown-item" href="#" style="color: #000;"><img style="border-radius: 8px;" src="img/convenios.png"> &nbsp;&nbsp;Convênios</a>
              <a class="dropdown-item" href="#" style="color: #000;"><img style="border-radius: 8px;" src="img/compras.png"> &nbsp;&nbsp;Compras</a>
              <a class="dropdown-item" href="#" style="color: #000;"><img style="border-radius: 8px;" src="img/info.png"> &nbsp;&nbsp;Ordem de Serviço de Informatica</a>
              <a class="dropdown-item" href="#" style="color: #000;"><img style="border-radius: 8px;" src="img/manutencao.png">Manutenção Elétrica/Hidráulica</a>
              <a class="dropdown-item" href="#" style="color: #000;"><img style="border-radius: 8px;" src="img/gcm.png"> &nbsp;&nbsp;Guarda Municipal</a>
              <a class="dropdown-item" href="#" style="color: #000;"><img style="border-radius: 8px;" src="img/animal.png"> &nbsp;&nbsp;Bem-Estar Animal </a>
              <a class="dropdown-item" href="#" style="color: #000;"><img style="border-radius: 8px;" src="img/leis.png"> &nbsp;&nbsp;Leis e Decretos </a>
            </div>            
          </li>                

          <li class="nav-item">
            <a href="#contact" class="nav-link js-scroll-trigger">Contato</a><!-- home -->
          </li>                                      

          <li class="nav-item dropdown">
            <a href="#pservidor" id="navbarDropdown" class="nav-link dropdown-toggle " role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">APP 156</a><!-- home -->

            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a target="_blank" href='https://play.google.com/store/apps/details?id=com.jmp.atendimentoaocidadao&pcampaignid=MKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1'><img 
               style="height: 60px;" alt='Disponível no Google Play' src='https://play.google.com/intl/en_us/badges/images/generic/pt-br_badge_web_generic.png'/></a>

               &nbsp;&nbsp;&nbsp;<a target="_blank" href="https://itunes.apple.com/br/app/156-sumar%C3%A9/id1362123876?mt=8" style="display:inline-block;overflow:hidden;background:url(https://linkmaker.itunes.apple.com/assets/shared/badges/pt-br/appstore-lrg.svg) no-repeat;width:135px;height:40px;background-size:contain;"></a>
             </div>            

           </li>                   
         </ul>
       </div>
     </div>
   </nav>



   <section class="bg-primary" id="about">
    <div class="container">
      <div class="row">
        <div id="demo" class="carousel slide" data-ride="carousel">

         <!-- Indicators -->
         <ol class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
          <li data-target="#demo" data-slide-to="3"></li>
          <li data-target="#demo" data-slide-to="4"></li>
          <li data-target="#demo" data-slide-to="5"></li>
          <li data-target="#demo" data-slide-to="6"></li>
          <li data-target="#demo" data-slide-to="7"></li>
          <li data-target="#demo" data-slide-to="8"></li>
          <li data-target="#demo" data-slide-to="9"></li>
          <li data-target="#demo" data-slide-to="10"></li>
          <li data-target="#demo" data-slide-to="11"></li>            
        </ol>

        <!-- The slideshow  -->
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <img src="img/top-bg.jpg" alt="PMS" style="width: 100%; height: 100%;">
            <div class="carousel-caption">
              <h3>Texto 1</h3>
              <p>João</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/top-bg.jpg" alt="PMS" style="width: 100%; height: 100%;">
            <div class="carousel-caption">
              <h3>Texto 2</h3>
              <p>João</p>
            </div>              
          </div>
          <div class="carousel-item">
            <img src="img/top-bg.jpg" alt="PMS" style="width: 100%; height: 100%;">
            <div class="carousel-caption">
              <h3>Texto 3</h3>
              <p>João</p>
            </div>            
          </div>
          <div class="carousel-item">
            <img src="img/top-bg.jpg" alt="PMS" style="width: 100%; height: 100%;">
            <div class="carousel-caption">
              <h3>Texto 4</h3>
              <p>João</p>
            </div>            
          </div>            
          <div class="carousel-item">
            <img src="img/top-bg.jpg" alt="PMS" style="width: 100%; height: 100%;">
            <div class="carousel-caption">
              <h3>Texto 5</h3>
              <p>João</p>
            </div>              
          </div>            
          <div class="carousel-item">
            <img src="img/top-bg.jpg" alt="PMS" style="width: 100%; height: 100%;">
            <div class="carousel-caption">
              <h3>Texto 6</h3>
              <p>João</p>
            </div>              
          </div>  
          <div class="carousel-item">
            <img src="img/top-bg.jpg" alt="PMS" style="width: 100%; height: 100%;">
            <div class="carousel-caption">
              <h3>Texto 7</h3>
              <p>João</p>
            </div>              
          </div>             
          <div class="carousel-item">
            <img src="img/top-bg.jpg" alt="PMS" style="width: 100%; height: 100%;">
            <div class="carousel-caption">
              <h3>Texto 8</h3>
              <p>João</p>
            </div>              
          </div>             
          <div class="carousel-item">
            <img src="img/top-bg.jpg" alt="PMS" style="width: 100%; height: 100%;">
            <div class="carousel-caption">
              <h3>Texto 9</h3>
              <p>João</p>
            </div>              
          </div>             
          <div class="carousel-item">
            <img src="img/top-bg.jpg" alt="PMS" style="width: 100%; height: 100%;">
            <div class="carousel-caption">
              <h3>Texto 10</h3>
              <p>João</p>
            </div>              
          </div>             
          <div class="carousel-item">
            <img src="img/top-bg.jpg" alt="PMS" style="width: 100%; height: 100%;">
            <div class="carousel-caption">
              <h3>Texto 11</h3>
              <p>João</p>
            </div>
          </div>             
          <div class="carousel-item">
            <img src="img/top-bg.jpg" alt="PMS" style="width: 100%; height: 100%;">
            <div class="carousel-caption">
              <h3>Texto 12</h3>
              <p>João</p>
            </div>              
          </div>                       
        </div>

        <!-- Left and right controls  -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>

      </div>
    </div>
  </div>
</section>




<section class="sectionServicosNoticias" id="sec-noti" style="background-color: #fff;">
  <div class="container-fluid">

    <div class="row">





      <div class="col-sm-12 col-md-12 col-lg-12 text-center" style="background-color: #114065;">
        <h2 style="color: #fff; margin-bottom: 30px; text-align: center;"><span class="fas fa-newspaper"></span> NOTICIAS</h2>


        <div class="row" style="margin-right: 1%; margin-left: 1%;">
          <?php
          require_once 'classes/Noticia.php';
          $titulo = new Noticia();
          $quantidade = 6;
          $dados = $titulo->buscar($quantidade);

          for ($i=0; $i < $quantidade; $i++) { 
            $id = $dados[0][$i]['id'];
            $pasta = $dados[1][$i]['pasta'];
            $nome = $dados[1][$i]['nome'];    

            echo '<div class="col-sm-12 col-md-4 col-lg-4 card-noticia"  style="border: 10px #114065 solid; border-radius: 15px; margin-bottom: 15px;  min-height: 250px; position: relative;">
            <a href="pages/buscaNoticias.php?id='.$id.'" type="submit">
            <div>
            <div class="row">
            <div class="col-12" style="height: 250px;">';            

            echo "
            <img  class='img-fluid rounded img-thumbnail' 
            src='administracao/files/images/noticias/".$pasta .$nome. "' 
            style='height: 100%; width: 100%; margin-top: 10px'>
            </div>
            </div>";

            echo '
            <div class="row">
            <div class="col-12" style="margin-top: 15px;">
            <h5 class="card-title"><b>';

            echo $dados[0][$i]['titulo'];

            echo '</b></h5>
            <h6 class="text-primary"  align="left"><b>';
            echo $dados[0][$i]['data'];

            echo "</b></h6>

            </div>
            </div>

            </div>
            </a>
            </div>";
          }
          ?>
        </div>

        <div class="row" style="margin-right: 20px; margin-left: 20px; margin-bottom: 10px;">
          <div class="offset-md-9 col-12 col-md-3 col-lg-3">
            <a href="pages/todasNoticias.php" id="btn-noticia" class="btn btn-sm btn-block">Ver Todas As Noticias</a>
          </div>   
        </div>

      </div>
    </div>
  </div>
</section>

<section class="sectionServicosNoticias" id="sec-serv" style="background-color: white;">

  <div class="container-fluid" style="background-color: #114065;">

    <div class="row">

      <div class="col-sm-12 col-md-12 col-lg-12 text-center">

        <h2 style="color: #fff; margin-top: 20px; margin-bottom: 30px; text-align: center;"><span class="fas fa-id-badge "></span> SERVIÇOS</h2>
        <!-- <hr style="border: .5px solid #fff;">            -->   

        <div class="row" style="margin: 5px 10px 0 10px;">
          <div class="col-lg-4 col-md-4 col-secretarias">
            <ul style="text-align: left;">
              <li><a href="https://sumare.sigissweb.com/" target="_blank"><span class="fas fa-caret-right"></span> SIGISSWEB</a></li>
              <li><a href="https://www.savam.com.br/?id=6713" target="_blank"><span class="fas fa-caret-right"></span> GIA-ICMS</a></li>
              <li><a href="http://sumare.sp.gov.br/novo/content.php?t=content&id=67&idm=67" target="_blank"><span class="fas fa-caret-right"></span> PORTAL DA TRANSPARÊNCIA</a></li>
              <li><a href="http://sumare.sp.gov.br/novo/content.php?t=content&id=5248&idm=20" target="_blank"><span class="fas fa-caret-right"></span> LICENCIAMENTO AMBIENTAL</a></li>
            </ul>
          </div>
          <div class="col-lg-4 col-md-4  col-secretarias">
            <ul style="text-align: left;">          
              <li><a href="http://sol.sumare.sp.gov.br:8090/RHWEB/Default.aspx" target="_blank"><span class="fas fa-caret-right"></span> HOLERITE WEB</a></li>
              <li><a href="http://www.sumare.sp.gov.br/novo/lista_inclusao.php" target="_blank"><span class="fas fa-caret-right"></span> INCLUSÃO SOCIAL</a></li>
              <li><a href="https://sed.educacao.sp.gov.br/Boletim/BoletimEscolar" target="_blank"><span class="fas fa-caret-right"></span> BOLETIM ONLINE</a></li>
              <li><a href="http://sumare.sp.gov.br/novo/content.php?t=content&id=3660&idm=3660" target="_blank"><span class="fas fa-caret-right"></span> ACESSO A ATRIBUTOS ONLINE</a></li>
            </ul>
          </div>
          <div class="col-lg-4 col-md-4 col-secretarias">
            <ul style="text-align: left;">              
              <li><a href="http://www.sumare.sp.gov.br/novo/cmsBusiness/upload/arquivo/325d9e79fbaaef6d33a31090c5d98cf3.pdf" target="_blank"><span class="fas fa-caret-right"></span> HORÁRIOS DO TRANSPORTE MUNICIPAL</a></li>

              <li><a href="" data-toggle="modal" data-target="#modalConhecaSumare"><span class="fas fa-caret-right"></span>  CONHEÇA SUMARÉ</a></li>
            </ul>

            <div class="mbr-section-btn text-left" id="156" style=" margin-left: 40px; margin-bottom: 5px;">
              <a href="https://play.google.com/store" target="_blank" class="btn btn-light display-4" style="color: #000;">
                MAIS SERVIÇOS
              </a>
            </div>            
          </div>
        </div>

        <div class="modal fade" id="modalConhecaSumare">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">

             <div class="modal-body">

               Sumaré cresceu muito nos últimos anos, mas preserva algumas características aconchegantes, como praças públicas arborizadas, locais para caminhadas e espaços de convivência.<br><br>

               Citamos o Turismo Rural, que é um segmento que exibe áreas de rara beleza, mobilizando empresas, alunos e visitantes em conhecer inúmeras culturas agrícolas desenvolvidas no Município. Oferece ainda caminhadas ecológicas, palestras, visitas a assentamentos rurais que são modelos no Brasil.<br><br>

               Existem três <b>ASSENTAMENTOS RURAIS</b>. Eles são objeto de freqüentes visitas e pesquisas por parte de universitários da região. Com originalidade e apoio cientifico, desenvolveram técnicas de plantio de frutas e hortaliças e aproveitamento de resíduos vegetais para confecção de peças de artesanato.<br><br>

               Existem opções de recreações em <b>PESQUEIROS</b>, ao longo das principais vias de acesso ao Município, com infra-estrutura aos visitantes.  <br><br>

               Outros importantes locais de visitação são: o <b>HORTO FLORESTAL</b>, área de preservação ambiental, com espaços para caminhadas e conhecimento de espécies nativas e a <b>REPRESA DO MARCELO PEDRONI</b>, com espaços de lazer, para shows, área de churrasqueiras, parquinho infantil.<br><br>

               Dentro do segmento de Turismo Religioso e de Eventos, a <b>ESTÂNCIA ÁRVORE DA VIDA</b> considerado o maior centro de convenções da América do Sul em recinto fechado com ar-condicionado, com área construída de 12.000 metros quadrados, vários auditórios, um deles para <b>10.000 pessoas sentadas</b>, infra-estrutura de hospedagem, parques, jardins e lagos reservados para recreação, lazer e convivência social e é capacitado para servir 5.000 refeições por hora. O local recebe aproximadamente 200.000 pessoas por ano.<br><br>

               Outro lugar de indizível prazer é a <b>FAZENDA VAUGHAN</b> que também é um local de retiro religioso e de descanso e retrata a vida na fazenda, voltada também para o turismo pedagógico e histórico (Imigração Americana), aloja até 100 pessoas.<br><br>

               Sumaré também é ressaltada pelo Turismo de Negócios, porque recebe diariamente inúmeros empresários ligados as empresas e multinacionais instaladas no município. Empresários estes que utilizam a estrutura de <b>HOTÉIS</b> e <b>RESTAURANTES</b>, de primeira qualidade que a cidade oferece.<br><br>

               No segmento de Turismo Histórico, a cidade tem a mostrar pontos ligados à sua fundação, como a <b>ESTAÇÃO FERROVIÁRIA</b>, a <b>SUB-ESTAÇÃO DE ENERGIA ELÉTRICA DA CIA</b>. <b>PAULISTA DE ESTRADAS DE FERRO</b>, o <b>CASARÃO SERTÃOZINHO</b>, entre outros.

             </div>

             <div class="modal-footer">
              <div class="dropdown-divider"></div>
              <div class="row"><div class="col-12">EDITAIS|COMUNICADOS|OUTROS</div></div>
              <div class="row">
                <div class="col-12">
                  <table class="table">
                    <thead>
                      <tr>
                        <th></th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>18/04/2017</td>
                        <td>Pesqueiros</td>
                      </tr>
                      <tr>
                        <td>27/04/2017</td>
                        <td>Agências de Viagens</td>
                      </tr>                        
                      <tr>
                        <td>18/04/2017</td>
                        <td>Hospedagem</td>
                      </tr>                        
                      <tr>
                        <td>27/04/2017</td>
                        <td>Casas Noturnas</td>
                      </tr>                        
                      <tr>
                        <td>27/04/2017</td>
                        <td>Espaços de Eventos</td>
                      </tr>                        
                      <tr>
                        <td>27/04/2017</td>
                        <td>Lazer</td>
                      </tr>                        
                      <tr>
                        <td>18/04/2017</td>
                        <td>Restaurantes</td>
                      </tr>                        
                      <tr>
                        <td>27/04/2017</td>
                        <td>Padarias</td>
                      </tr>                        
                      <tr>
                        <td>18/04/2017</td>
                        <td>Sorveterias/Docerias</td>
                      </tr>                        
                    </tbody>
                  </table>
                </div>
              </div>
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

          </div>
        </div>
      </div>

    </div>
  </div>
</div> 


</section>

<section class="secretariasClass" id="sectionSecretarias">
  <div class="container-fluid" style="background-color: #114065;">

    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12">
        <h2 style="color: #fff;" align="center" id='secretarias'><span class="fas fa-list-ul"></span> SECRETARIAS<h2>      
        </div> 
      </div>

      <div class="row" style="margin: 5px 10px 25px 10px;"> <!--INICIO DA ROW-->

        <div class="col-sm-12 col-md-12 col-lg-4 col-secretarias">
          <ul>

            <?php

            require_once("funcoes/Funcoes.php");

            $secretarias = listaInfoSecretarias(); 

            for ($i=0; $i < 6; $i++) { 
              echo "<div class='dropdown'>
              <li class='dropdown-toggle' data-toggle='dropdown' style='color: #114065;'><a href=''><span class='fas fa-chevron-circle-right'></span> ".$secretarias[$i]['sec']."</a></li>
              <div class='dropdown-menu' style='padding: 20px;'>
              <b>Secretário:</b> ".$secretarias[$i]['secretario']."<br>
              <b>Telefone:</b> ".$secretarias[$i]['tel']."<br>
              <b>Endereço:</b> ".$secretarias[$i]['endereco']."<br>
              <b>E-mail:</b> ".$secretarias[$i]['email']."
              </div>
              </div>";
            }

            ?>

          </ul>
        </div>

        <div class="col-sm-12 col-md-12 col-lg-4 col-secretarias"> 
          <ul> 
            <?php

            for ($i=6; $i < 12; $i++) { 
              echo "<div class='dropdown'>
              <li class='dropdown-toggle' data-toggle='dropdown' style='color: #114065;'><a href=''><span class='fas fa-chevron-circle-right'></span> ".$secretarias[$i]['sec']."</a></li>
              <div class='dropdown-menu' style='padding: 20px;'>
              <b>Secretário:</b> ".$secretarias[$i]['secretario']."<br>
              <b>Telefone:</b> ".$secretarias[$i]['tel']."<br>
              <b>Endereço:</b> ".$secretarias[$i]['endereco']."<br>
              <b>E-mail:</b> ".$secretarias[$i]['email']."
              </div>
              </div>";
            }              

            ?>
          </ul>
        </div>

        <div class="col-sm-12 col-md-12 col-lg-4 col-secretarias">
          <ul>
            <?php

            for ($i=12; $i < 19; $i++) { 
              echo "<div class='dropdown'>
              <li class='dropdown-toggle' data-toggle='dropdown' style='color: #114065;'><a href=''><span class='fas fa-chevron-circle-right'></span> ".$secretarias[$i]['sec']."</a></li>
              <div class='dropdown-menu' style='padding: 20px;'>
              <b>Secretário:</b> ".$secretarias[$i]['secretario']."<br>
              <b>Telefone:</b> ".$secretarias[$i]['tel']."<br>
              <b>Endereço:</b> ".$secretarias[$i]['endereco']."<br>
              <b>E-mail:</b> ".$secretarias[$i]['email']."
              </div>
              </div>";
            }              

            ?>              
          </ul>
        </div>

      </div> <!--FIM DA ROW-->

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



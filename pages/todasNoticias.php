<?php 
require_once('head-nav.php'); 
require_once('../classes/Noticia.php'); 
setlocale( LC_ALL, 'pt_BR', 'pt_BR.iso-8859-1', 'pt_BR.utf-8');
?>

<body id="page-top">

	<!-- Navigation -->
	<nav class="navbar navbar-toggleable-sm navbar-expand-lg fixed-top" id="mainNav">
		<div class="container">
			<a class="navbar-brand js-scroll-trigger" href="#page-top">
				<img src="../img/logo_sumare.png" alt="PMS" style="height: 3.8rem;">
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
        	<a href="../#sec-noti" class="nav-link js-scroll-trigger">Noticias</a><!-- home    target="blank"-->
        </li>           

        <li class="nav-item">
        	<a href="../#sec-serv" class="nav-link js-scroll-trigger">Serviços</a><!-- home    target="blank"-->
        </li>                          


        <li class="nav-item">
        	<a href="../#sectionSecretarias" class="nav-link js-scroll-trigger">Secretarias</a><!-- home    target="blank"-->
        </li>           




        <li class="nav-item">
        	<a href="../#pcidadao" class="nav-link js-scroll-trigger">Cidadão</a><!-- home   -->
        </li>              

        <li class="nav-item dropdown">
        	<a href="../#pservidor" id="navbarDropdown" class="nav-link dropdown-toggle " role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Servidor
        	</a><!-- home -->

        	<div class="dropdown-menu" aria-labelledby="navbarDropdown">
        		<a class="dropdown-item" href="#" style="color: #000;"><img style="width: 50px; height: 50px;" src="../img/logo@512.png"> &nbsp;&nbsp;Atendimento ao Cidadão (156)</a>
        		<a class="dropdown-item" href="#" style="color: #000;"><img style="border-radius: 8px;" src="../img/convenios.png"> &nbsp;&nbsp;Convênios</a>
        		<a class="dropdown-item" href="#" style="color: #000;"><img style="border-radius: 8px;" src="../img/compras.png"> &nbsp;&nbsp;Compras</a>
        		<a class="dropdown-item" href="#" style="color: #000;"><img style="border-radius: 8px;" src="../img/info.png"> &nbsp;&nbsp;Ordem de Serviço de Informatica</a>
        		<a class="dropdown-item" href="#" style="color: #000;"><img style="border-radius: 8px;" src="../img/manutencao.png">Manutenção Elétrica/Hidráulica</a>
        		<a class="dropdown-item" href="#" style="color: #000;"><img style="border-radius: 8px;" src="../img/gcm.png"> &nbsp;&nbsp;Guarda Municipal</a>
        		<a class="dropdown-item" href="#" style="color: #000;"><img style="border-radius: 8px;" src="../img/animal.png"> &nbsp;&nbsp;Bem-Estar Animal </a>
        		<a class="dropdown-item" href="#" style="color: #000;"><img style="border-radius: 8px;" src="../img/leis.png"> &nbsp;&nbsp;Leis e Decretos </a>
        	</div>            
        </li>                

        <li class="nav-item">
        	<a href="#contact" class="nav-link js-scroll-trigger">Contato</a><!-- home -->
        </li>                                      

        <li class="nav-item dropdown">
        	<a href="../#pservidor" id="navbarDropdown" class="nav-link dropdown-toggle " role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">APP 156</a><!-- home -->

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

<br><br><br><br>	

<?php
require_once '../classes/Noticia.php';

$noticias = new Noticia();

$inicio = isset($_GET['data_inicial']) ? $_GET['data_inicial'] : 0 ;
$fim = isset($_GET['data_final']) ? $_GET['data_final'] : date('Y-m-d');

if(empty($inicio) && empty($fim)){
	$resultados = $noticias->buscarTodas();
}elseif(empty($fim)){
	$resultados = $noticias->buscarTodasOrdenada($inicio, date('Y-m-d'));
}else{
	$resultados = $noticias->buscarTodasOrdenada($inicio, $fim);
}
$count = count($resultados);
?>


<section id="start" class=" bg-primary" style="padding-top: 30px !important; padding: 0 2% 10% 2%;">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 col-md-10 col-lg-10" style="  ">
				<div class="row">
					<div class="col-12 col-md-4 col-lg-4">
						<form action="todasNoticias.php" method="get">
							<div class="row">
								<div class="col-12" align="center">
									<h4 style="color: #fff; margin-bottom: 10px; "><i class="fas fa-filter"></i> Filtrar pela Data:</h4>
									<h6 style="color: white ;">De:
										<input style="margin-left: 5px" type="date" value="<?php echo $inicio;?>" name="data_inicial" placeholder="">
									</h6>
								</div>
							</div>

							<div class="row">
								<div class="col-12" align="center">
									<h6 style="color: white;">Até:
										<input style="margin-left: 2px" type="date" value="<?php echo $fim;?>" name="data_final" placeholder="">
									</h6>
								</div>
							</div>

							<div class="row">
								<div class="col-12" align="center">
									<button class="btn btn-light" style="margin-bottom: 15px; margin-left: -35px;">Filtrar</button>
								</div>	
							</div>					
						</form>
					</div>
					

					<div class="busca-noticia col-12 col-md-8 col-lg-8 rounded" style="background-color: white; ">
						<h3 align="center"  style="color: #081F31; margin-bottom: 5px; margin-top: 15px"> <i class="fas fa-book"></i><b> Todas as Noticias (<?php echo $count?>)</b></h3>
						<br><div align="right"><a class="nav-link js-scroll-trigger" href="#end"><button class="btn btn-primary">Ir para o final</button></a></div><br>
						
						<?php

						for ($i=0; $i < count($resultados) ; $i++) { 
							$resultado = $resultados[$i];
							$titulo = utf8_encode($resultado['titulo']);
							$link = "<a ";
							if($i >10 && $i+7 == count($resultados)-1){
								$link .= "id='end' ";
							}
							$link .= "style='color: black;' href='buscaNoticias.php?id=".$resultado['id']. "'>".$resultado['data']. " - <b>".$titulo . "</b></a><hr id='hr_blue'>";
							echo "$link";													
						}
						
						?>
						<div align="right"><a class="nav-link js-scroll-trigger" id="asd" href="#page-top"><button class="btn btn-primary">Voltar para o topo</button></a></div><br>
						
					</div>
					
				</div>

			</div>
		</div>

	</div>
</section>



<hr>



<?php require_once('footer.php'); ?>

</body>

</html>

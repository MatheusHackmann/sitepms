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
        	<a href="../index.php#sectionSecretarias" class="nav-link js-scroll-trigger">Secretarias</a><!-- home    target="blank"-->
        </li>           

        <li class="nav-item">
        	<a href="../index.php#sec-noti" class="nav-link js-scroll-trigger">Serviços/Noticias</a><!-- home    target="blank"-->
        </li>                

        <li class="nav-item">
        	<a href="../index.php#pcidadao" class="nav-link js-scroll-trigger">Para o Cidadão</a><!-- home -->
        </li>              

        <li class="nav-item">
        	<a href="../index.php#pservidor" class="nav-link js-scroll-trigger">Para o Servidor</a><!-- home -->
        </li>                


        <li class="nav-item">
        	<a href="#contact" class="nav-link js-scroll-trigger">Contato</a><!-- home -->
        </li>                                      
    </ul>
</div>
</div>
</nav>

<br><br><br><br>	


<section class=" bg-primary" style="padding-top: 30px !important;">
	<div class="container-fluid">
		<div class="row">

			<div class="col-12 col-md-10 col-lg-10">
				<!-- <h3 align="center"  style="color: #081F31; margin-bottom: 5px; margin-top: 15px "> <i class="fas fa-book"></i><b> Todas as Noticias</b></h3> -->

				<div class="row">

					<!--******  OBS: COLOCAR OU NÃO ESSE OFSET?? se colocar mudar o tamanho lg da noticias para 6 <div class="col-1"></div> -->
					
					<!-- <div class="col-lg-1"></div> -->
					<div class="col-12 col-md-4 col-lg-4">
						<form action="todasNoticias.php" method="get">
							
							<div class="row">
								<div class="col-12" align="center">
									<!-- align="left" --><h4 style="color: #fff; margin-bottom: 10px; "><i class="fas fa-filter"></i> Filtrar pela Data:</h4>
									<h6 style="color: white ;">De:
										<input style="margin-left: 5px" type="date" name="data_inicial" placeholder="">
									</h6>
								</div>
							</div>

							<div class="row">
								<div class="col-12" align="center">
									<h6 style="color: white;">Até:
										<input style="margin-left: 2px" type="date" name="data_final" placeholder="">
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
					

					<div class="busca-noticia col-12 col-md-8 col-lg-8 rounded" style="background-color: white;"> <!-- md-6 e sem o ofset no inicio do filtro -->
						<h3 align="center"  style="color: #081F31; margin-bottom: 5px; margin-top: 15px "> <i class="fas fa-book"></i><b> Todas as Noticias</b></h3><br>
						<?php
						require_once '../classes/Noticia.php';

						$noticias = new Noticia();


							//print_r($resultados);

						$inicio = isset($_GET['data_inicial']) ? $_GET['data_inicial'] : 0 ;
						$fim = isset($_GET['data_final']) ? $_GET['data_final'] : date('Y-m-d');
						


						
						if(empty($inicio) && empty($fim)){

							$resultados = $noticias->buscarTodas();
							foreach ($resultados as $key => $result) {
								/*echo "<br><a href='pages/buscaNoticias.php?".$result['id']. ".
								$result['titulo'] ." </a>'"; /*$result['titulo'];*/

								$titulo = utf8_encode($result['titulo']);
								$titulo = str_replace('@@', '“', $titulo); 
								$titulo = str_replace('!!', '”',  $titulo);	
								$titulo = str_replace('!@', '‘', $titulo);
								$titulo = str_replace('@!', '’', $titulo);	
								$titulo = str_replace('~!', '–', $titulo);														

								echo "<a style='color: black;' href='buscaNoticias.php?id=".$result['id']. "'>".$result['data']. " - <b>".$titulo . "</b></a><hr id='hr_blue'>";



								

								/*echo "<a style='color: black;' href='buscaNoticias.php?id=".
								$result['id'];
								."'>".
								$result['data'];
								." - <b>".  
								$titulo = utf8_encode($result['titulo']);  
								$titulo = str_replace('@@', '“', $titulo);
								$titulo = str_replace('!!', '”',  $titulo); 
								echo $titulo;
								."</a></br><hr id='hr_blue'>";								*/


								/*
									TABELA:  , porem gostei mais sem tabela

								echo "<table class='table table-bordered'>
								<thead class='thead-dark'>
								<tr>
								<th>Data</th>
								<th>Título</th>
								</tr>
								</thead>
								<tbody>";

								//$resultados = $noticias->buscarTodas();
								foreach ($resultados as $key => $result) {


									echo "
									<tr>
									<a style='color:black;' href='buscarNoticias.php?id= ".$result['id']."'>
									<td><b>". $result['data']."<b></td>
									<td>". utf8_encode($result['titulo'])."</td>
									</a>
									</tr>
									";
								}

								echo "
								</tbody>
								</table>";*/	
							}							


							


						}elseif(empty($fim)){

							$resultados = $noticias->buscarTodasOrdenada($inicio, date('Y-m-d'));

							foreach ($resultados as $key => $result) {
								
								$titulo = utf8_encode($result['titulo']);
								$titulo = str_replace('@@', '“', $titulo); 
								$titulo = str_replace('!!', '”',  $titulo);	
								$titulo = str_replace('!@', '‘', $titulo);
								$titulo = str_replace('@!', '’', $titulo);		
								$titulo = str_replace('~!', '–', $titulo);													

								echo "<a style='color: black;' href='buscaNoticias.php?id=".$result['id']. "'>".$result['data']. " - <b>".$titulo . "</b></a><hr id='hr_blue'>";

								
								/*echo "<table class='table table-bordered'>
								<thead class='thead-dark'>
								<tr>
								<th>Data</th>
								<th>Título</th>
								</tr>
								</thead>
								<tbody>";

								//$resultados = $noticias->buscarTodas();
								foreach ($resultados as $key => $result) {


									echo "
									<tr>
									<a style='color:black;' href='buscarNoticias.php?id= ".$result['id']."'>
									<td><b>". $result['data']."<b></td>
									<td>". utf8_encode($result['titulo'])."</td>
									</a>
									</tr>
									";
								}

								echo "
								</tbody>
								</table>";*/								

							}

						}else{

							$resultados = $noticias->buscarTodasOrdenada($inicio, $fim);

							foreach ($resultados as $key => $result) {
								/*echo "<br> <a style='color: black;' href='buscaNoticias.php?id=".$result['id']. "'>".$result['data']. " - <b>".  utf8_encode($result['titulo']). "</a></b><br>";*/

								$titulo = utf8_encode($result['titulo']);
								$titulo = str_replace('@@', '“', $titulo); 
								$titulo = str_replace('!!', '”',  $titulo);	
								$titulo = str_replace('!@', '‘', $titulo);
								$titulo = str_replace('@!', '’', $titulo);		
								$titulo = str_replace('~!', '–', $titulo);													

								echo "<a style='color: black;' href='buscaNoticias.php?id=".$result['id']. "'>".$result['data']. " - <b>".$titulo . "</b></a><hr id='hr_blue'>";

								/*echo "<table class='table table-bordered'>
								<thead class='thead-dark'>
								<tr>
								<th>Data</th>
								<th>Título</th>
								</tr>
								</thead>
								<tbody>";

								//$resultados = $noticias->buscarTodas();
								foreach ($resultados as $key => $result) {


									echo "
									<tr>
									<a style='color:black;' href='buscarNoticias.php?id= ".$result['id']."'>
									<td><b>". $result['data']."<b></td>
									<td>". utf8_encode($result['titulo'])."</td>
									</a>
									</tr>
									";
								}

								echo "
								</tbody>
								</table>";	*/							
							}


						}


						?>
						<br><br><br>	

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

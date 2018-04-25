<!DOCTYPE html>
<html lang="en">
<head>

	<?php require_once '../classes/Noticia.php'; ?>


	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Prefeitura Municipal de Sumaré</title>

	<!-- Bootstrap core CSS -->
	<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

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
  <link href="../vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/creative.css" rel="stylesheet">
  <link href="../css/styles.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
  <link rel="stylesheet" href="../icons/css/fa-svg-with-js.css">

  
  

</head>

<body id="page-top">

	<!-- Navigation -->
	<nav class="navbar navbar-toggleable-sm navbar-expand-lg fixed-top" id="mainNav">
		<div class="container">
			<a class="navbar-brand js-scroll-trigger" href="../#page-top">
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
        	<a href="../#sectionSecretarias" class="nav-link js-scroll-trigger">Secretarias</a><!-- home    target="blank"-->
        </li>           

        <li class="nav-item">
        	<a href="../#sec-noti" class="nav-link js-scroll-trigger">Serviços/Noticias</a><!-- home    target="blank"-->
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

<br><br><br><br>	
<?php
require_once '../classes/Noticia.php';

?>

<section class=" bg-primary">
	<div class="container-fluid">
		<div class="row">

			<div class="col-lg-10">
				<!-- <h3 align="center"  style="color: #081F31; margin-bottom: 5px; margin-top: 15px "> <i class="fas fa-book"></i><b> Todas as Noticias</b></h3> -->

				<div class="row">

					<!--******  OBS: COLOCAR OU NÃO ESSE OFSET?? se colocar mudar o tamanho lg da noticias para 6 <div class="col-1"></div> -->
					
					<!-- <div class="col-lg-1"></div> -->
					<div class=" col-md-4 col-lg-4">
						<form action="todasNoticias.php" method="get">
							

							<div class="col-lg">
								<!-- align="left" --><h4 style="color: #fff; margin-bottom: 10px; "><i class="fas fa-filter"></i> Filtrar pela Data:</h4>
								<h6 style="color: white ;">De:
									<input style="margin-left: 5px" type="date" name="data_inicial" placeholder="">
								</h6>
							</div>

							<div class="col-lg">
								<h6 style="color: white;">Até:
									<input style="margin-left: 2px" type="date" name="data_final" placeholder="">
								</h6>
							</div>

							<div class="col-lg">
								<input style="margin-left: 34px; margin-bottom: 20px"  type="submit" >
							</div>						
						</form>
					</div>

					
					<div class="col-lg-1 col-md-1"></div>
					

					<div class="busca-noticia col-md-5 col-lg-7" style="background-color: white;"> <!-- md-6 e sem o ofset no inicio do filtro -->
						<h3 align="center"  style="color: #081F31; margin-bottom: 5px; margin-top: 15px "> <i class="fas fa-book"></i><b> Todas as Noticias</b></h3>
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

								echo "<br> <a style='color: black;' href='buscaNoticias.php?id=".$result['id']. "'>".$result['data']. " - <b>".  utf8_encode($result['titulo']). "</a></b><br>";

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

								
								echo "<br> <a style='color: black;' href='buscaNoticias.php?id=".$result['id']. "'>".$result['data']. " - <b>".  utf8_encode($result['titulo']). "</a></b><br>";		
								
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
								echo "<br> <a style='color: black;' href='buscaNoticias.php?id=".$result['id']. "'>".$result['data']. " - <b>".  utf8_encode($result['titulo']). "</a></b><br>";

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

						<!-- 

						<section>
						<div class="container-fluid">
						<div class="row">
						<div class="col-4">
						<br><br><br>

						</div>			
						</div>
						</div>
						</section>

					-->

					<hr>



					<section class="footer text-white" id="contact">
						<div class="container-fluid">
							<div class="row">
								<div id="footer_left_content" class="col-4" style="border-radius:8px;border: 3px solid #114065;">
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

								<div class="offset-2 col-6">
									<iframe class="google-map" frameborder="0" style="border-radius:8px;border: 3px solid #114065;" src="https://www.google.com/maps/embed/v1/place?q=dom%20barreto%201303&key=AIzaSyAeIl5Ozd4jhKbH9gCnyJwvvM7mp6nr_v0" allowfullscreen></iframe>
								</div>
							</div>
							<div class="row" style="padding-top: 1%; padding-bottom: 1%; margin-top: 10px; margin-bottom: 10px;">
								<div class="col-12" style="text-align: center;">
									© Prefeitura Municipal De Sumaré - JMP DEVELOPMENT
								</div>
							</div>
						</div>
					</section>

					<!-- Bootstrap core JavaScript -->
					<script src="../vendor/jquery/jquery.min.js"></script>
					<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

					<!-- Plugin JavaScript -->
					<script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
					<script src="../vendor/scrollreveal/scrollreveal.min.js"></script>
					<script src="../vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

					<!-- Custom scripts for this template -->
					<script src="../js/creative.min.js"></script>

					<script src="../icons/js/fontawesome-all.js"></script>

				</body>

				</html>


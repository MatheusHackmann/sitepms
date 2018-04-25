<!DOCTYPE html>
<html lang="en">
<head>

	<?php require_once '../classes/Noticia.php'; 
	setlocale( LC_ALL, 'pt_BR', 'pt_BR.iso-8859-1', 'pt_BR.utf-8');
	?>


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
        	<a href="../#sectionSecretarias" class="nav-link js-scroll-trigger">Secretarias</a><!-- home    target="blank"-->
        </li>           

        <li class="nav-item">
        	<a href="../#sec-noti" class="nav-link js-scroll-trigger">Serviços/Noticias</a><!-- home    target="blank"-->
        </li>                

        <li class="nav-item">
        	<a href="../#pcidadao" class="nav-link js-scroll-trigger">Para o Cidadão</a><!-- home -->
        </li>              

        <li class="nav-item">
        	<a href="../#pservidor" class="nav-link js-scroll-trigger">Para o Servidor</a><!-- home -->
        </li>                


        <li class="nav-item">
        	<a href="#contact" class="nav-link js-scroll-trigger">Contato</a><!-- home -->
        </li>                                      
    </ul>
</div>
</div>
</nav>

<br><br>

<?php


if(isset($_GET['id'])){

	$id = $_GET['id'];

	$titulo = new Noticia();
	$dados = $titulo->buscar($id);
}
else if(empty($_GET['id'])){

	echo "NÃO FOI ENCONTRADA NENHUMA NOTICIA";


}

?>

<section class="bg-primary">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-1"></div>
			<div class="col-lg-10">
				<div class="notiEspecifica">
					<h3><?php /*"Título: ".*/$titulo = utf8_encode($dados[0][0]['titulo']); $titulo = str_replace('@@', '“', $titulo); $titulo = str_replace('!!', '”',  $titulo); echo $titulo;?></h3><br>
					<h4><?php $sub = utf8_encode($dados[0][0]['subtitulo']); $sub = str_replace('@@', '“', $sub); $sub = str_replace('!!', '”',  $sub); echo $sub; ?></h4><br>

					

					<?php
		/******** SE TIVER MAIS DE UMA IMAGEM MOSTRAR TODAS if(==1){}else if(==2), e SE não tiver nenhuma mostrar uma imagem PADRÃO (logo da prefeitura)*/
					
						/*$id = $dados[0][0]['id'];*/
						$num = new Noticia();
						if($num->getNumberImages($id) == 1){
//*****					//echo "imagem: ".$dados[1][0]['pasta'].$dados[1][0]['nome'];
						echo count($dados[1]);
						echo "<br>".$id = $dados[0][0]['id']; 
						// [1][0]['pasta'] // [1][0]['nome']
						// [1][1]['pasta'] // [1][1]['nome']
						echo "<div align='center'><img src='../administracao/files/images/noticias/".$dados[1][0]['pasta'] . $dados[1][0]['nome']." ' style='width:40%;'></div><br>";
						// DEPOS MUDAR DE ADMINISTRACAO, PARA O SITE EM SI, files/images
						}
					?>
					
					<p>
					<?php 
					 $conteudo = utf8_encode($dados[0][0]['conteudo']);
					 $conteudo = str_replace('@@', '“', $conteudo);
					 $conteudo = str_replace('!!', '”',  $conteudo); 
					 // $conteudo = str_replace('@@', '“', $conteudo);
					 // $conteudo = str_replace('!!', '”', $conteudo);
					 echo $conteudo;
					 ?>
					 </p>

					<h6><b><?php echo date('d/m/Y',strtotime($dados[0][0]['data']));?></b></h6>
				</div>
				

				<div class="row">
					<div class="notiEspecifica" style="color: white;">
						

					</div>

				</div>

			</div>
		</div>
	</div>
</section>
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


<?php 

  //		‘‘‘‘‘‘‘

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

<br><br>

<?php


if(isset($_GET['id'])){

	$id = $_GET['id'];

	$titulo = new Noticia();
	$dados = $titulo->buscarPeloId($id);
}
else if(empty($_GET['id'])){

	echo "NÃO FOI ENCONTRADA NENHUMA NOTICIA";

}

?>

<section class="bg-primary">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-1"></div> <!-- Tava com lg-1 e lg-10 na div de baixo -->
			<div class="col-lg-9 col-md-11 col-sm-8 rounded" style="background-color: white; padding: 30px 30px 30px 30px; margin: 0 4% 0 4%;">
				<div class="notiEspecifica">

					<h3>
						<b><?php echo utf8_encode($dados[0][0]['titulo']);?></b>
					</h3><br>



					<h4><?php 
					$sub = utf8_encode($dados[0][0]['subtitulo']);
					str_replace('~!', '–', $sub);
					echo $sub; ?></h4><br>

					<div>
						<h6 style="text-align: left;"><b><?php echo date('d/m/Y',strtotime($dados[0][0]['data']));?></b>

							<?php
							$url = urlencode('http://10.0.20.94/sitepms/pages/buscaNoticias.php?id='.$id);
							echo '<iframe align="right" src="https://www.facebook.com/plugins/share_button.php?href='.$url.'&layout=button&size=small&mobile_iframe=false&width=97&height=20" width="97" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>';
							?>						
						</h6>
					</div><br>			





					<?php
					/******** SE TIVER MAIS DE UMA IMAGEM MOSTRAR TODAS if(==1){}else if(==2), e SE não tiver nenhuma mostrar uma imagem PADRÃO (logo da prefeitura)*/

					$num = new Noticia();
					$numero = $num->getImageCount($id);

					/*if($numero == 1){
//*****					//echo "imagem: ".$dados[1][0]['pasta'].$dados[1][0]['nome'];


						// [1][0]['pasta'] // [1][0]['nome']
						// [1][1]['pasta'] // [1][1]['nome']
						
						// DEPOS MUDAR DE ADMINISTRACAO, PARA O SITE EM SI, files/images
					}else if($numero == 2){

					}else if($numero == 3){

					}*/

					switch ($numero) {
						case 0:

						break;
						
						case 1:
						echo "
						<div align='center'>
						<img class='rounded' id='img-2' src='../administracao/files/images/noticias/".$dados[1][0]['pasta'] . $dados[1][0]['nome']."' onclick='openModal();currentSlide(1)' class='hover-shadow' style='width:60%;'>

						</div>
						<br>	

						<div id='myModal' class='modal'>
						<span class='close cursor' onclick='closeModal()'>&times;</span>
						<div class='modal-content'>
						
						<div class='col-12 mySlides' align='center'>
						<img id='img-3' src='../administracao/files/images/noticias/".$dados[1][0]['pasta'] . $dados[1][0]['nome']."' style='width:75%'>
						</div>

						<div class='caption-container'>
						<p id='caption'></p>
						</div>

						<div align='center'>

						<img id='img-3' class='demo' src='../administracao/files/images/noticias/".$dados[1][0]['pasta'] . $dados[1][0]['nome']."' onclick='currentSlide(1)'  style='width:30%;'>

						</div>
						</div>
						</div> ";

						break;
						case 2:

						echo "
						<div align='center'>
						<img class='rounded' id='img-2' src='../administracao/files/images/noticias/".$dados[1][0]['pasta'] . $dados[1][0]['nome']."' onclick='openModal();currentSlide(1)' class='hover-shadow' style='width:60%;'>

						<br><br><img class='rounded' id='img-2' src='../administracao/files/images/noticias/".$dados[1][1]['pasta'] . $dados[1][1]['nome']."' onclick='openModal();currentSlide(2)' class='hover-shadow' style='width:30%;'>

						</div>
						<br>	

						<div id='myModal' class='modal'>
						<span class='close cursor' onclick='closeModal()'>&times;</span>
						<div class='modal-content'>
						
						<div class='col-12 mySlides' align='center'>
						<img id='img-3' src='../administracao/files/images/noticias/".$dados[1][0]['pasta'] . $dados[1][0]['nome']."' style='width:75%'>
						</div>

						<div class='col-12 mySlides' align='center'>
						<img id='img-3' src='../administracao/files/images/noticias/".$dados[1][1]['pasta'] . $dados[1][1]['nome']."' style='width:75%'>
						</div>

						<a class='prev' onclick='plusSlides(-1)'>&#10094;</a>
						<a class='next' onclick='plusSlides(1)'>&#10095;</a>

						<div class='caption-container'>
						<p id='caption'></p>
						</div>

						<div align='center'>

						<img id='img-3' class='demo' src='../administracao/files/images/noticias/".$dados[1][0]['pasta'] . $dados[1][0]['nome']."' onclick='currentSlide(1)'  style='width:30%;'>
						

						<img id='img-3' class='demo' src='../administracao/files/images/noticias/".$dados[1][1]['pasta'] . $dados[1][1]['nome']."' onclick='currentSlide(2)' style='width:30%;'>


						</div>

						</div>
						</div> ";										

						break;
						/*VER SE TIVER 3 FOTOS NO MAXIMO, OU SE PODE HAVER MAIS*/
						default:

						echo "
						<div align='center'>
						<img class='rounded' id='img-2' src='../administracao/files/images/noticias/".$dados[1][0]['pasta'] . $dados[1][0]['nome']."' onclick='openModal();currentSlide(1)' class='hover-shadow' style='width:60%;'>

						<br><br><img class='rounded' id='img-2' src='../administracao/files/images/noticias/".$dados[1][1]['pasta'] . $dados[1][1]['nome']."' onclick='openModal();currentSlide(2)' class='hover-shadow' style='width:30%;'>
						
						<img class='rounded' src='../administracao/files/images/noticias/".$dados[1][2]['pasta'] . $dados[1][2]['nome']."' onclick='openModal();currentSlide(3)' class='hover-shadow' style='width:30%;>
						</div>
						<div class='col-1'></div> <!-- uma div a mais para desbugar o modal -->
						<br>	

						<div id='myModal' class='modal'>
						<span class='close cursor' onclick='closeModal()'>&times;</span>
						<div class='modal-content'>

						<div class='mySlides' align='center'>
						<img id='img-3' src='../administracao/files/images/noticias/".$dados[1][0]['pasta'] . $dados[1][0]['nome']."' style='width:75%'>
						</div>

						<div class='mySlides' align='center'>
						<img id='img-3' src='../administracao/files/images/noticias/".$dados[1][1]['pasta'] . $dados[1][1]['nome']."' style='width:75%'>
						</div>

						<div class='mySlides' align='center'>
						<img id='img-3' src='../administracao/files/images/noticias/".$dados[1][2]['pasta'] . $dados[1][2]['nome']."' style='width:75%'>
						</div>

						<a class='prev' onclick='plusSlides(-1)'>&#10094;</a>
						<a class='next' onclick='plusSlides(1)'>&#10095;</a>

						<div class='caption-container'>
						<p id='caption'></p>
						</div>

						<div align='center'>
						<img id='img-3' class='demo' src='../administracao/files/images/noticias/".$dados[1][0]['pasta'] . $dados[1][0]['nome']."' onclick='currentSlide(1)' alt='img1' style='width:30%;'>
						
						<img id='img-3' class='demo' src='../administracao/files/images/noticias/".$dados[1][1]['pasta'] . $dados[1][1]['nome']."' onclick='currentSlide(2)' alt='img2' style='width:30%;'>
						

						
						<img id='img-3' class='demo' src='../administracao/files/images/noticias/".$dados[1][2]['pasta'] . $dados[1][2]['nome']."' onclick='currentSlide(3)' alt='img3' style='width:30%;'>
						</div>

						</div>
						</div> ";
						break;
					}
					?>

					<p>
						<?php 
						echo $dados[0][0]['conteudo'];
						?>
					</p>
				</div>

				<div class="row">
					<div class="notiEspecifica" style="color: white;"></div>
				</div>
			</div>
		</div>
	</div>
</section>
<hr>


<?php require_once('footer.php');  ?>

<script>
// Open the Modal
function openModal() {
	document.getElementById('myModal').style.display = "block";
}

// Close the Modal
function closeModal() {
	document.getElementById('myModal').style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
	showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
	showSlides(slideIndex = n);
}

function showSlides(n) {
	var i;
	var slides = document.getElementsByClassName("mySlides");
	var dots = document.getElementsByClassName("demo");
	var captionText = document.getElementById("caption");
	if (n > slides.length) {slideIndex = 1}
		if (n < 1) {slideIndex = slides.length}
			for (i = 0; i < slides.length; i++) {
				slides[i].style.display = "none";
			}
			for (i = 0; i < dots.length; i++) {
				dots[i].className = dots[i].className.replace(" active", "");
			}
			slides[slideIndex-1].style.display = "block";
			dots[slideIndex-1].className += " active";
			captionText.innerHTML = dots[slideIndex-1].alt;
		}
	</script>

</body>

</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="../files/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../files/css/style.css">

	<script src="../files/js/tinymce/tinymce.min.js"></script>
	<script>tinymce.init({ 
		selector:'textarea#conteudo',
		branding: false,
		language: 'pt_BR',
		menubar: 'edit insert format table tools help'
	});</script>	
</head>
<body>	
	<div class="container-fluid">

		<nav class="navbar navbar-toggleable-sm navbar-expand-lg navbar-light bg-inverse">
			<a href="" class="navbar-brand">ADMIN</a>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="nav">
					<li class="nav-item active">
						<a href="#" class="nav-link">Home</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">Home</a>
					</li>					
					<li class="nav-item">
						<a href="#" class="nav-link">Home</a>
					</li>					
					<li class="nav-item">
						<a href="#" class="nav-link">Home</a>
					</li>					
				</ul>
			</div>
		</nav>
	</div>

	
	<div class="container-fluid" >
		<div class="row">
			<?php require_once("side_menu.php");?>

			<div class="offset-1 col-8 bg-novaNoticia">
				<div>
					<h1>Nova Notícia</h1>
					<form action="cad_noticias.php" method="post" enctype="multipart/form-data" class="form">
						<div class="col-12">
							<div class="form-group col-8">
								<label for="idTitulo">*Título: </label>
								<input class="form-control" type="text" name="titulo" id="idTitulo" required autocomplete="off">
							</div>
							<div class="form-group col-12">
								<label for="idSubtitulo">*Subtítulo: </label>
								<input class="form-control" type="text" name="subtitulo" id="idSubtitulo" autocomplete="off">	
							</div>

							<div class="form-group col-3" >
								<label for="idData">*Data: </label>
								<input class="form-control" type="date" name="data" id="idData" required value="<?php echo date('Y-m-d'); ?>">		
							</div>

							<div class="form-group col-11">
								<label for="idConteudo">*Conteúdo: </label>
								<textarea id="conteudo" name="conteudo"></textarea>
							</div>


							<div>

							</div>

							<div class="row">
								<div class="col-10 form-group">
									<input type="file" name="imagem[]" id="idImagem" multiple>							
								</div>
								<div class="col-2"><button class="btn btn-primary" type="submit"><b>Cadastrar</b></button></div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>


	<?php

	require_once("../classes/Noticias.php");

	if($_POST){
		$cadNoticias = new Noticias();

		if(!empty($_FILES['imagem'])){
			$cadNoticias->cadImagem(md5(time().$_POST['titulo']),$_FILES['imagem']);
		}else{
			$cadNoticias->cadImagem(md5(time().$_POST['titulo']),$_FILES['imagem']);
		}

		$cadNoticias->cadastrarNoticia($_POST['titulo'], $_POST['subtitulo'], $_POST['data'], $_POST['conteudo']);
	}
	?>
	<script type="text/javascript" src="../files/js/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="../files/js/fontawesome-all.js"></script>
	<script type="text/javascript" src="../files/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../files/js/popper.min.js"></script>
</body>
</html>

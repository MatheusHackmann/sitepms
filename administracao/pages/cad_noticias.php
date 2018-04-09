<?php require_once("footer.php"); ?>


<div class="container-fluid" >
	<div class="row">
		<div class="col-2 bg-menuNoticia">
			<ul class="nav">
				<li class="link"><button class="btn btn-primary"><a href="">Todas as Notícias</a></button></li>
				<li class="link"><button class="btn btn-primary"><a href="">Nova Notícia</a></button></li>
			</ul>

		</div>

		<div class="offset-1 col-8 bg-novaNoticia">
			<div>
				<h1>Nova Notícia</h1>
				<form action="../obj/obj_cadastro_noticias.php" method="post" enctype="multipart/form-data" class="form">
					<div class="col-12">
						<div class="form-group">
							<label for="idTitulo">*Título: </label>
							<input class="form-control" type="text" name="titulo" id="idTitulo" required autocomplete="off">
						</div>
						<div class="form-group">
							<label for="idSubtitulo">Subtítulo: </label>
							<input class="form-control" type="text" name="subtitulo" id="idSubtitulo" autocomplete="off">	
						</div>

						<div class="form-group">
							<label for="idData">*Data: </label>
							<input class="form-control" type="date" name="data" id="idData" required>		
						</div>
						<div class="form-group">
							<label for="idConteudo">*Conteúdo: </label>
							<textarea class="form-control" name="conteudo" id="idConteudo" rows="6" required></textarea>	
						</div>

						<div class="row">
							<div class="col-10 form-group">
								<input type="file" name="imagem" id="idImagem">							
							</div>
							<div class="col-2"><button class="btn btn-primary" type="submit">Cadastrar</button></div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>



<?php require_once("rodape.php"); ?>
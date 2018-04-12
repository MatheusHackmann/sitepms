<?php

require_once("../classes/Noticias.php");

$cadNoticias = new Noticias();

$cadNoticias->cadImagem($_FILES['imagem']);
$cadNoticias->cadastrarNoticia($_POST['titulo'], $_POST['subtitulo'], $_POST['data'], $_POST['conteudo']);

?>
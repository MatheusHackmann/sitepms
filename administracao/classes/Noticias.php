<?php
require_once("Sql.php");

class Noticias{	
	private $foto;

	//Método para cadastrar os dados no banco
	public function cadastrarNoticia($titulo, $subtitulo, $data, $conteudo)
	{
		$sql = new Sql();

		$sql->query("INSERT INTO tb_noticias (titulo, subtitulo, data_artigo, conteudo, imagem) VALUES (:TITULO, :SUBTITULO, :DATA_ARTIGO, :CONTEUDO, :IMAGEM)", $params = array(
			":TITULO" => utf8_decode($titulo),
			":SUBTITULO" => utf8_decode($subtitulo),
			":DATA_ARTIGO" => $data,
			":CONTEUDO" => utf8_decode($conteudo),
			":IMAGEM" => $this->foto
		));

		if ($sql) {
			echo "Ok";
		}else{
			echo "Erro";
		}
	}

	public function cadImagem($imagem)
	{
		
		//Analisa qual a extensao da imagem
		preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $imagem["name"], $ext);
		//Cria um nome unico pra imagem
		$nome_imagem = md5(uniqid(time())) . "." . $ext[1];
		//Cria o caminho que a foto deve ser gravada
		$caminho_imagem = "../files/images/noticias/" . $nome_imagem;
		//Grava a foto no caminho
		move_uploaded_file($imagem["tmp_name"], $caminho_imagem);

		$this->foto = $nome_imagem;
	}

}
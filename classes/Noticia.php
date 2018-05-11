<?php
require_once 'Sql.php';

class Noticia{

	public function buscar($quantidade){
		$sql = new Sql();

		$results = $sql->select("SELECT id, titulo, `data`, conteudo from noticias order by id desc LIMIT $quantidade");
		// subtitulo(não é pego no select) 

		$diasSemana = array('Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado');
		$meses = array('Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro');

		foreach ($results as $result => $value) {
			$dia = $diasSemana[date('w',strtotime($value['data']))];
			$mes = $meses[date('n', strtotime($value['data']))-1];
			$data = $dia.", ".date("d * @ $ Y", strtotime($value['data']));
			$data = str_replace("*", "de", $data);
			$data = str_replace("@", $mes, $data);
			$data = str_replace("$", "de", $data);
			$resultado[] = array('titulo'=>$value['titulo'],'conteudo'=>$value['conteudo'],'data'=>$data, 'id'=>$value['id']);		
		}

		$res = $sql->select("SELECT id, nome, pasta FROM imagem_noticia GROUP BY id ORDER BY id desc LIMIT $quantidade");

		return $return = array($resultado, $res) ;

	}

	public function buscarTodas(){
		$sql = new Sql();

		$results = $sql->select("SELECT * from noticias order by id desc");
		// subtitulo(não é pego no select) 

		$diasSemana = array('Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado');
		$meses = array('Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro');

		foreach ($results as $result => $value) {
			$dia = $diasSemana[date('w',strtotime($value['data']))];
			$mes = $meses[date('n', strtotime($value['data']))-1];
			$data = $dia.", ".date("d * @ $ Y", strtotime($value['data']));
			$data = str_replace("*", "de", $data);
			$data = str_replace("@", $mes, $data);
			$data = str_replace("$", "de", $data);
			$resultado[] = array('titulo'=>$value['titulo'],'conteudo'=>$value['conteudo'],'data'=>$data, 'id'=>$value['id']);
		}

		return $resultado;
	}


	public function buscarTodasOrdenada($dataInicio, $dataFinal){
		$aux = $dataInicio;
		if ($dataInicio > $dataFinal) {
			$dataInicio = $dataFinal;
			$dataFinal = $aux;
		}

		$sql = new Sql();

		$results = $sql->select("SELECT * FROM noticias where data >= :DATAINI AND data <= :DATAFIM ORDER BY id DESC", array(

			':DATAINI'=>$dataInicio,
			':DATAFIM'=>$dataFinal	
		));

		$diasSemana = array('Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado');
		$meses = array('Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro');
		$resultado = array();

		foreach ($results as $result => $value) {
			$dia = $diasSemana[date('w',strtotime($value['data']))];
			$mes = $meses[date('n', strtotime($value['data']))-1];
			$data = $dia.", ".date("d * @ $ Y", strtotime($value['data']));
			$data = str_replace("*", "de", $data);
			$data = str_replace("@", $mes, $data);
			$data = str_replace("$", "de", $data);
			$resultado[] = array('titulo'=>$value['titulo'],'conteudo'=>$value['conteudo'],'data'=>$data, 'id'=>$value['id']);
		}

		return $resultado;			
	}




	public function buscarPeloId($id){
		$sql = new Sql();
		$result[0] = $sql->select("SELECT * FROM noticias WHERE id = :ID ", array(
			':ID'=>$id
		));

		$result[1] = $sql->select("SELECT * FROM imagem_noticia WHERE id = :ID ", array(
			':ID' => $id
		));			

		return $result; 
	}


	public function getImageCount($id){
		$sql = new Sql();
		$num = $sql->select("SELECT * FROM imagem_noticia WHERE id=:ID", array(
			':ID'=>$id
		));

		return count($num);
	}	
}

?>
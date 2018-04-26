<?php
	require_once 'Sql.php';
	
class Noticia{

	public function buscarDuas(){
		$sql = new Sql();

		$results = $sql->select("SELECT id, titulo, `data`, conteudo from noticias order by id desc LIMIT 2");
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


		//	$id = $value['id'];


			//print_r($resultss);

	//		print_r($id);

	//		$id1 = $id[0];

			// array_merge($id);

			//$imagem = array($result['nome'], $result['pasta']);
			
			//print_r($imagem);

			//echo "<a style='color:#212529' href='?id=".$result['id']."'>" .$result['titulo']. "</a>";
		}
	//	print_r($id);

		
		

/*
		$id = $result['id'];

		$res[$id]= $sql->select("SELECT * FROM imagem_noticia WHERE id = :ID ", array(
			':ID' => $id	

		));			

		foreach ($res as $re) {
			print_r($re);

		}		
*/




		//$resultss = $sql->select("SELECT id, nome, pasta FROM imagem_noticia");

	/*	for ($i=0; $i < count($results) ; $i++) { 

			$result = $sql->select("SELECT * FROM imagem_noticia WHERE id = :ID ", array(
				':ID' => $id			
			));

			print_r($result);
		}

		$result = $sql->select("SELECT * FROM imagem_noticia WHERE id = :ID ", array(
			':ID' => $id
		));			

		array_push($results, $result);
*/
		//return $results; 				



		$res = $sql->select("SELECT id, nome, pasta FROM imagem_noticia GROUP BY id ORDER BY id desc LIMIT 2");

		

		/*print_r($res);
		print_r($resultado);
*/


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

		$sql = new Sql();

		$results = $sql->select("SELECT * FROM noticias where data >= :DATAINI AND data <= :DATAFIM ORDER BY id DESC", array(

			':DATAINI'=>$dataInicio,
			':DATAFIM'=>$dataFinal	
		));

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




	public function buscar($id){

		$sql = new Sql();
		$result[0] = $sql->select("SELECT * FROM noticias WHERE id = :ID ", array(
			':ID'=>$id
		));


		$result[1] = $sql->select("SELECT * FROM imagem_noticia WHERE id = :ID ", array(
			':ID' => $id
		));			

		return $result; 
		
		/*$sql = new Sql();

		$noticia = select("SELECT * FROM noticias WHERE id = :ID", array(
			':ID'=> $id
		));

		$imagem = select("SELECT * FROM imagem_noticia WHERE id = :ID", array(
			':ID'=> $id
		));*/


	}


	public function getNumberImages($id){

		$sql = new Sql();
		$num = $sql->select("SELECT * FROM imagem_noticia WHERE id=:ID", array(
			':ID'=>$id
		));

		return($num);


	}	


	/*public function(){

	} //transformar aspas estranha em aspas normal, antes do utf8encode


	public function(){

	} // voltar as aspas estranha depois do utf8*/

}

?>
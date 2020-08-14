<?php

include_once('conexao.php');

$postjson = json_decode(file_get_contents('php://input'), true);


//LISTAGEM DOS USUARIOS E PESQUISA PELO NOME E EMAIL

if($postjson['requisicao'] == 'listar'){
    
    $query = mysqli_query($mysqli, "select * from usuarios order by id desc
     limit $postjson[start], $postjson[limit]");
    }

 	while($row = mysqli_fetch_array($query)){ 
 		$dados[] = array(
 			'id' => $row['id'], 
 			'nome' => $row['nome'],
			'email' => $row['email'],
      'senha' => $row['senha'],
            
        
 		);

 }

        if($query){
                $result = json_encode(array('success'=>true, 'result'=>$dados));

            }else{
                $result = json_encode(array('success'=>false));

            }
            echo $result;



<?php


function defineCategoriaCompetidor(string $nome, string $idade) : ?string
{

$categorias = [];
$categorias[] = "infantil";
$categorias[] = "adolescente";
$categorias[] = "adulto";
 
 if (validaNome($nome) && validaIdade($idade)){

 	//Para a categoria INFANTIL o candidato deve ter entre 6 à 12 anos
	if($idade >= 6 && $idade <= 12){
	    for ( $i = 0; $i <= count($categorias); $i++){
	        if ( $categorias[$i] == 'infantil'){
	           setarMensagemSucesso(mensagem: "O nadador " .$nome. " compete na categoria " .$categorias[$i]) ;
	            return null;

	        }
	    }
	}

	//Para a categoria ADOLESCENTE o candidato deve ter entre 13 à 18 anos
	else if($idade >= 13 && $idade <= 17){
		for ( $i = 0; $i <= count($categorias); $i++){
	        if ( $categorias[$i] == 'adolescente'){
                setarMensagemSucesso(mensagem:  "O nadador " .$nome. " compete na categoria " .$categorias[$i]) ;
	            return null;

	        }
	    }
	}

	//Para a categoria ADULTO o candidato deve ter ser maior de 18 anos
	else if($idade >= 18){
	    for ( $i = 0; $i <= count($categorias); $i++){
	        if ( $categorias[$i] == 'adulto'){
	                setarMensagemSucesso(mensagem:  "O nadador " .$nome. " compete na categoria " .$categorias[$i]) ;
	            return null;

	            }
	        }
	    }
	else{
	return obterMensagemErro();
	}

}

?>
<?php

session_start();

 function setarMensagemSucesso(string $mensagem) : void 
 {
 	$_SESSION['mensagem_de_sucesso'] = $mensagem;
 } 

 function obterMensagemSucesso() : ?string
 {
 	if(isset($_SESSION['mensagem_de_sucesso']))
 		return $_SESSION['mensagem_de_sucesso'];

 	return null;	
 }

 function setarMensagemErro(string $mensagem) : void 
 {
 	$_SESSION['mensagem_de_erro'] = $mensagem;
 } 

 function obterMensagemErro() : ?string
 {
 	if(isset($_SESSION['mensagem_de_erro']))
 		return $_SESSION['mensagem_de_erro'];

 	return null;	
 }

function removerMEnsagemSucesso() : void
{
	if(isset($_SESSION['mensagem_de_sucesso']))
 		unset($_SESSION['mensagem_de_sucesso']);
}


function removerMensagemErro() : void
{
	if(isset($_SESSION['mensagem_de_erro']))
 		unset($_SESSION['mensagem_de_erro']);
}

?>
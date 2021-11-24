<?php

function validaNome(string $nome) : bool 
{
	   //Indica que o nome não pode ser vazio
  if(empty($nome)){ 
   setarMensagemErro(mensagem: 'O nome não pode ser vazio, por favor digite-o novamente!');
    return false;
  }

      //Indica que o nome tem que ter mais de 3 entre letras e espaços
  else if (strlen ($nome) < 3){
    setarMensagemErro(mensagem: 'O nome tem que ter mais de 3 caracteres, por favor, digite-o novamente!');
    header('location: index.php');
    return false;
  }

      //Indica que o nome não pode passar de 40 entre letras e espaços
  else if (strlen($nome) >= 40){
   setarMensagemErro(mensagem: 'O nome não pode passar de 40 caracteres, por favor, digite-o novamente!');
    header('location: index.php');
    return false;
  }
  return true;
}

function validaIdade(string $idade) : bool
{
  
      //Indica que a idade tem que ser números
  if (!is_numeric($idade)){
    setarMensagemErro(mensagem: 'Informe um número para a idade, por favor, digite-o novamente!');
      return false;
  }
  return true;

}

?>
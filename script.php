<?php

session_start();

$categorias = [];
$categorias[] = "infantil";
$categorias[] = "adolescente";
$categorias[] = "adulto";
$categorias[] = "Terceira idade";

$nome = $_POST['nome'];
$idade = $_POST['idade'];

//Indica que o nome não pode ser vazio
if(empty($nome)){ 
   $_SESSION['mensagem_de_erro'] = 'O nome não pode ser vazio, por favor digite-o novamente!';
   header('location: index.php');
}

//Indica que o nome tem que ter mais de 3 entre letras e espaços
if (strlen ($nome) < 3){
    $_SESSION['mensagem_de_erro'] = 'O nome tem que ter mais de 3 caracteres, por favor, digite-o novamente!';
    header('location: index.php');
}

//Indica que o nome não pode passar de 40 entre letras e espaços
if (strlen($nome) >= 40){
   $_SESSION['mensagem_de_erro'] = 'O nome não pode passar de 40 caracteres, por favor, digite-o novamente!';
    header('location: index.php');
}

//Indica que a idade tem que ser números
if (!is_numeric($idade)){
   $_SESSION['mensagem_de_erro'] = 'Informe um número para a idade, por favor, digite-o novamente!';
    header('location: index.php');
}

//Para a categoria INFANTIL o candidato deve ter entre 6 à 12 anos
if($idade >= 6 && $idade <= 12){
    for ($i=0; $i <= count($categorias); $i++){
        if ($categorias[$i] == 'infantil')
            echo "O nadador " .$nome. " compete na " .$categorias[$i];
    }
}

//Para a categoria ADOLESCENTE o candidato deve ter entre 13 à 18 anos
else if($idade >= 13 && $idade <= 17){
    echo "Adolescente";
}

//Para a categoria ADULTO o candidato deve ter entre 18 à 59 anos
else if($idade >= 18 && $idade <= 59){
    echo "Adulto";
}

//Para a categoria TERCEIRA IDADE o candidato deve ser maior de 60 anos
else if($idade >= 60){
    echo "Terceira Idade";
}
?>

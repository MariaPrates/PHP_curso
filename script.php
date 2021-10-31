<?php

$categorias = [];
$categorias[] = "infantil";
$categorias[] = "adolescente";
$categorias[] = "adulto";

$nome = $_POST['$nome'];
$idade = $_POST['$idade'];

if(empty($nome)){
    echo "O nome não pode ser vazio";
    return;
}

if (strlen ($nome) < 3){
    echo "Deve conter mais de 3 caracteres";
    return;
}

if (strlen($nome) < 40){
    echo "Nome muito extenso";
    return;
}

if (!is_numeric($idade)){
    echo "Informe a idade";
    return;
}

if($idade >= 6 && $idade <= 12){
    for ($i=0; $i <= count($categorias); $i++){
        if ($categorias[$i] == 'infantil')
            echo "O nadador " .$nome. " compete na " .$categorias[$i];
    }
}
else if($idade >= 13 && $idade <= 18){
    echo "Adolescente";
}
else if($idade >= 18){
    echo "Adulto";
}
?>

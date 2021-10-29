<?php
	 $categorias = [];
	 $categorias[] = "infantil";
	 $categorias[] = "adolescente";
	 $categorias[] = "adulto";

$nome = "Eduardo";
$idade = 8;

//var_dump ($nome,$idade);

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


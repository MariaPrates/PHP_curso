<?php
include "servicos/servicoMensagemSession.php";
include "servicos/servicovalidacao.php";
include "servicos/servicoCategoriaCompetidor.php";


$nome = $_POST['nome'];
$idade = $_POST['idade'];

defineCategoriaCompetidor($nome, $idade);

header('location: index.php');
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Inscrições!</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css" />
</head>
<body>
<h4 class="title">Formulário de Inscrição para Candidatos! </h4>
<form action="script.php" method="POST">

   
    <fieldset>
        <legend>Formulário</legend>
        
        <?php 

        $mensagemDeSucesso = isset($_SESSION['mensagem_de_sucesso']) ? $_SESSION['mensagem_de_sucesso'] : '';
         if (!empty($mensagemDeSucesso)) {
                echo $mensagemDeSucesso;
            }
        $mensagemDeErro = isset($_SESSION['mensagem_de_erro']) ? $_SESSION['mensagem_de_erro'] : '';
            if (!empty($mensagemDeErro)) {
                echo $mensagemDeErro;
            }
        ?>
        <p>     
            <label for="nome">Nome completo: <em class="required">(obrigatório)</em></label>
            <input name="nome" id="nome" type="text" />
        </p>

        <p>
            <label for="idade">Idade:</label>
            <input name="idade" id="idade" type="text"/>
        </p>

    </fieldset>

    <p>
        <input type="submit" value="Enviar dados" id="enviar"/>
    </p>

</form>
</body>
</html>

<?php
    include "servicos/servicoMensagemSession.php";
?>
<!DOCTYPE html>
<html>

<head>
    <title>Inscrições!</title>
    <meta charset="UTF-8">
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <h4 class="title">Formulário de Inscrição para Candidatos! </h4>
        <form action="script.php" method="POST">
            <?php 

                $mensagemDeSucesso = obterMensagemSucesso();
                    if (!empty($mensagemDeSucesso)) 
                    {
                        echo $mensagemDeSucesso;
                    }

                $mensagemDeErro = obterMensagemErro();
                    if (!empty($mensagemDeErro)) 
                    {
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

            <p>
                <input type="submit" value="Enviar dados" id="enviar"/>
            </p>

        </form>
</body>
</html>
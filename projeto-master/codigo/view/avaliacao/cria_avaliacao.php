<!DOCTYPE html>

<html lang="pt-BR">

<head>

    <title>Easy Games</title>

    <meta charset="utf-8">

    <link rel="stylesheet" type="text/css" href="semantic/semantic.css">

    <script type="text/javascript" src="semantic/semantic.min.js"></script>
    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>

</head>

<body style="background-color: #2B2B2B">




<!-- principal -->
<div style="margin-left: 20%; margin-right: 20%">

<form method="post" action="avaliacoes.php?acao=exibir">

    <div class="ui form" style="width: 100%; margin-top: 5%;margin-bottom: 5%">

        <div class="field grey">

            <h1 style="color: #191919;">Criar avaliação</h1>

            <input type="text" name="nome" id="nome" placeholder="Adicione um nome">

        </div>
    </div>

    <div class="ui form" style="width: 100%; margin-top: 5%;margin-bottom: 5%">

        <div class="field grey">

            <textarea name="descricao" id="descricao" class="ckeditor" placeholder="Adicione uma descrição"></textarea>

            <button type="submit"  value="inserir" name="inserir" id="inserir" class="ui  grey button" style="margin-top: 2%; color: #2B2B2B">Enviar</button>

        </div>
    </div>


</form>

</div>






<!-- rodapé  -->

</body>

</html>
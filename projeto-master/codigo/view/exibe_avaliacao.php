<!DOCTYPE html>

<html lang="pt-BR">

<head>    

	<title>Easy Games</title>

	<meta charset="utf-8">   

	<link rel="stylesheet" type="text/css" href="semantic/semantic.css">

	<script type="text/javascript" src="semantic/semantic.min.js"></script>

</head>

<body style="background-color: #2B2B2B">

	<script type="text/javascript">
    function Nova()
    {
        location.href="exibe_avaliacao.php"
    }
</script>

	<div style="margin-left: 20%; margin-right: 20%">

			<div class="ui one column grid" style="margin-top: 5%">

				<div class="column">
					<div class="ui  segment" style=";background-color: #191919">
						<a href="avaind.php?id=<?= $avaliacao->getCod(); ?>">
							<h1 style="color: white">
							<?=
								$avaliacao->getNome();
							?>
							</h1>
						</a>
						</p>
							<?=
								$avaliacao->getDescricao();
							?>
						</p>

					</div></a>
				</div>

				<div class="column" style="margin-top: -2%; width: 15%">
					<a href="editar_avaliacao.php?id=<?= $avaliacao->getCod(); ?>"><button class="ui grey button" style="color: #2B2B2B">
  						Editar
					</button></a>
							
				</div>
				<div class="column" style="margin-top: -2%; width: 15%; margin-bottom: 3%">
					<a href="exclui_avaliacao.php?id=<?= $avaliacao->getCod(); ?>"><button class="ui grey button" style="color: #2B2B2B">
  						Excluir
					</button></a>
					
				</div>


			</div>

	</div>

	<!-- rodapé  -->


</body>

</html>
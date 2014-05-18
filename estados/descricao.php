<html>
	<head>
		<title>Relatório</title>
		<link rel="stylesheet" type="text/css" href="../inc/relatorio.css">

		<style>
		.dados td{
			text-align: center;
		}
		</style>
	</head>
	<body>
		<div class='container'>
			<div class="cabecalho">
            <?php
					require_once "../inc/conecta.inc";
					require_once "../inc/cabecalho_agenda.inc";
			?>
			</div>
			<div class="titulo">RELATÓRIO DE ESTADOS</div>
			<div class="corpo">
			<?php
            $sql_estados="
             SELECT
                   codbandeira, descricao, codestado
             FROM
                   bandeiras
             WHERE
                   codestado=$codestado
            ";
            $cons_estados=pg_query($sql_estados);
            $estados=pg_fetch_object($cons_estados);

            echo "$estados->descricao";

            ?>
            <p><br></p>
            <p><br></p>
            <p><br></p>
            <p><br></p>
            <p><br></p>
            <p><br></p>
            <p><br></p>
            <p><br></p>
            <p><br></p>
            <p><br></p>
            <p><br></p>
            <p><br></p>
            <p><br></p>
			</div>
			<center>Desenvolvimento do Prodígio</center>
            <p align='left'><a href='estados.php?acao=lista' title='Clique aqui para voltar'><img src='../imagens/voltar.png'></a></p>
		</div>
	</body>
</html>


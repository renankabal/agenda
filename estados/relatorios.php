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
			echo "<table>";
			echo "<th aling='left' width='30%'>CODESTADO</th>";
			echo "<th aling='left' width='60%'>ESTADO</th>";
            $sql_estados="
             SELECT
                   codestado, estado
             FROM
                 estados
             ORDER BY
                   estado
            ";
            $cons_estados=pg_query($sql_estados);
            while ($estados=pg_fetch_object($cons_estados))
            {
            # Zebrado
            if ($cor==$corzebrado) $cor=''; else $cor=$corzebrado;
            ?>
      <tr>
          <td><?php echo "$estados->codestado"; ?></td>
          <td><?php echo "$estados->estado"; ?></td>
      </tr>
      <?php }  ?>
			</table>
			<?php
            $sql_total="SELECT count(codestado) as total FROM estados";
            $cons_total=pg_query($sql_total);
            $total=pg_fetch_object($cons_total);
            ?>
            <align="right"><?php echo "<br><b>Com um total de $total->total cadastrados<b>"; ?>
            <p><br></p>
			</div>
			<center>Desenvolvimento do Prodígio</center>
			<p align='left'><a href='estados.php?acao=lista' title='Clique aqui para voltar'><img src='../imagens/voltar.png'></a></p>
		</div>
	</body>
</html>


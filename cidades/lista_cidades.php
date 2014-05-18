<style>
.botao
     {
        height:40;
        font-size:15px;
     }
</style>
<?
$sql_cidades="
             SELECT
                   codcidade, cidade , estados.estado
             FROM
                   cidades
             LEFT JOIN estados ON estados.codestado=cidades.codestado
             ORDER BY
                   codcidade DESC
             LIMIT 10
";
$cons_cidades=pg_query($sql_cidades);
while ($cidades=pg_fetch_object($cons_cidades))
{
  # Zebrado
  if ($cor==$corzebrado) $cor=''; else $cor=$corzebrado;
?>
      <tr title='Clique para ver a descrição do cidade <?php echo "$cidades->cidade"; ?>'>
          <td><?php echo "$cidades->codcidade"; ?></td>
          <td><?php echo "$cidades->cidade"; ?></td>
          <td><?php echo "$cidades->estado"; ?></td>
          <td align=center>
              <a href=javascript:alterar(<?php echo "$cidades->codcidade"; ?>)><img src=../imagens/alterar.png title='Clique aqui para alterar'></a>
              <a href=javascript:excluir(<?php echo "$cidades->codcidade"; ?>)><img src=../imagens/excluir.png title='Clique aqui para excluir'></a>
              <a href=javascript:detalhes(<?php echo "$cidades->codcidade"; ?>)><img src=../imagens/detalheespecial.png title='Clique aqui para visualizar detalhes do cidade'></a></td>
      </tr>
<?php }

?>
</table>
<p><br></p>
<center><input type=button class=botao value='Emitir Relatório' title='Clique para gerar seu Relatório' onclick=javascript:relatorio()>
<input type=button class=botao value='Gerar PDF' title='Clique para gerar seu Documento em PDF' onclick=javascript:pdf()></center>
<script>
function excluir(codcidade)
{
   if (confirm('Deseja realmente excluir o registro de nº '+codcidade+' ?'))
   {
      location.replace('cidades_sql.php?acao=excluir&codcidade='+codcidade);
   }
}
function detalhes(codcidade)
{
   if (confirm('Você deseja visualizar os detalhes do cidade nº '+codcidade+' ?'))
   {
      alert('Falta Fazer');
     // location.replace('');
   }
}
function alterar(codcidade)
{
   location.replace('cidades.php?acao=alterar&codcidade='+codcidade);
}
function relatorio()
{
    window.open('relatorios.php')
}
function pdf()
{
    window.open('pdf.php')
}
</script>

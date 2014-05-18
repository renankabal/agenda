<style>
.botao
     {
        height:40;
        font-size:15px;
     }
</style>
<?
$sql_grupos="
             SELECT
                   codgrupo, grupo
             FROM
                 grupos
             ORDER BY
                   codgrupo DESC
             LIMIT 10
";
$cons_grupos=pg_query($sql_grupos);
while ($grupos=pg_fetch_object($cons_grupos))
{
  # Zebrado
  if ($cor==$corzebrado) $cor=''; else $cor=$corzebrado;
?>
      <tr title='Clique para ver a descrição do grupo <?php echo "$grupos->grupo"; ?>'>
          <td><?php echo "$grupos->codgrupo"; ?></td>
          <td><?php echo "$grupos->grupo"; ?></td>
          <td align=center>
              <a href=javascript:alterar(<?php echo "$grupos->codgrupo"; ?>)><img src=../imagens/alterar.png title='Clique aqui para alterar'></a>
              <a href=javascript:excluir(<?php echo "$grupos->codgrupo"; ?>)><img src=../imagens/excluir.png title='Clique aqui para excluir'></a>
              <a href=javascript:detalhes(<?php echo "$grupos->codgrupo"; ?>)><img src=../imagens/detalheespecial.png title='Clique aqui para visualizar detalhes do grupo'></a></td>
      </tr>
<?php }

?>
</table>
<p><br></p>
<center><input type=button class=botao value='Emitir Relatório' title='Clique para gerar seu Relatório' onclick=javascript:relatorio()>
<input type=button class=botao value='Gerar PDF' title='Clique para gerar seu Documento em PDF' onclick=javascript:pdf()></center>
<script>
function excluir(codgrupo)
{
   if (confirm('Deseja realmente excluir o registro de nº '+codgrupo+' ?'))
   {
      location.replace('grupos_sql.php?acao=excluir&codgrupo='+codgrupo);
   }
}
function detalhes(codgrupo)
{
   if (confirm('Você deseja visualizar os detalhes do grupo nº '+codgrupo+' ?'))
   {
      alert('Falta Fazer');
     // location.replace('');
   }
}
function alterar(codgrupo)
{
   location.replace('grupos.php?acao=alterar&codgrupo='+codgrupo);
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

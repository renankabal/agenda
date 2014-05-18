<style>
.botao
     {
        height:40;
        font-size:15px;
     }
</style>
<?
$sql_dispositivos="
             SELECT
                   coddispositivo, dispositivo
             FROM
                 dispositivos
             ORDER BY
                   coddispositivo DESC
             LIMIT 10
";
$cons_dispositivos=pg_query($sql_dispositivos);
while ($dispositivos=pg_fetch_object($cons_dispositivos))
{
  # Zebrado
  if ($cor==$corzebrado) $cor=''; else $cor=$corzebrado;
?>
      <tr title='Clique para ver a descrição do dispositivo <?php echo "$dispositivos->dispositivo"; ?>'>
          <td><?php echo "$dispositivos->coddispositivo"; ?></td>
          <td><?php echo "$dispositivos->dispositivo"; ?></td>
          <td align=center>
              <a href=javascript:alterar(<?php echo "$dispositivos->coddispositivo"; ?>)><img src=../imagens/alterar.png title='Clique aqui para alterar'></a>
              <a href=javascript:excluir(<?php echo "$dispositivos->coddispositivo"; ?>)><img src=../imagens/excluir.png title='Clique aqui para excluir'></a>
              <a href=javascript:detalhes(<?php echo "$dispositivos->coddispositivo"; ?>)><img src=../imagens/detalheespecial.png title='Clique aqui para visualizar detalhes do dispositivo'></a></td>
      </tr>
<?php }

?>
</table>
<p><br></p>
<center><input type=button class=botao value='Emitir Relatório' title='Clique para gerar seu Relatório' onclick=javascript:relatorio()>
<input type=button class=botao value='Gerar PDF' title='Clique para gerar seu Documento em PDF' onclick=javascript:pdf()></center>
<script>
function excluir(coddispositivo)
{
   if (confirm('Deseja realmente excluir o registro de nº '+coddispositivo+' ?'))
   {
      location.replace('dispositivos_sql.php?acao=excluir&coddispositivo='+coddispositivo);
   }
}
function detalhes(coddispositivo)
{
   if (confirm('Você deseja visualizar os detalhes do dispositivo nº '+coddispositivo+' ?'))
   {
      alert('Falta Fazer');
     // location.replace('');
   }
}
function alterar(coddispositivo)
{
   location.replace('dispositivos.php?acao=alterar&coddispositivo='+coddispositivo);
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

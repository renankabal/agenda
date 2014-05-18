<style>
.botao
     {
        height:40;
        font-size:15px;
     }
.li {
list-style: none;
margin: 0.5em 0 0.5em 0.5em;
}
.li a {
margin:0;
padding:0;
text-decoration:none;
color: #fff;
}
.li a:visited {
color: #fff;
}
.li a:hover {
background: #fff;
color: #000;
}
.li a:active {
background: #ccc;
color: #000;
}
</style>
<?
$sql_estados="
             SELECT
                   codestado, estado
             FROM
                 estados
             ORDER BY
                   codestado DESC
             LIMIT 10
";
$cons_estados=pg_query($sql_estados);
while ($estados=pg_fetch_object($cons_estados))
{
  # Zebrado
  if ($cor==$corzebrado) $cor=''; else $cor=$corzebrado;
?>
      <tr>
          <td><?php echo "$estados->codestado"; ?></td>
          <td><a href='descricao.php?codestado=<?php echo "$estados->codestado"; ?>'><?php echo "$estados->estado"; ?></a></td>
          <td align=center>
              <a href=javascript:alterar(<?php echo "$estados->codestado"; ?>)><img src=../imagens/alterar.png title='Clique aqui para alterar'></a>
              <a href=javascript:excluir(<?php echo "$estados->codestado"; ?>)><img src=../imagens/excluir.png title='Clique aqui para excluir'></a>
              <a href=javascript:detalhes(<?php echo "$estados->codestado"; ?>)><img src=../imagens/detalheespecial.png title='Clique aqui para visualizar detalhes do Estado'></a></td>
      </tr>
<?php }

?>
</table>
<p><br></p>
<center><input type=button class=botao value='Emitir Relatório' title='Clique para gerar seu Relatório' onclick=javascript:relatorio()>
<input type=button class=botao value='Gerar PDF' title='Clique para gerar seu Documento em PDF' onclick=javascript:pdf()></center>
<script>
function excluir(codestado)
{
   if (confirm('Deseja realmente excluir o registro de nº '+codestado+' ?'))
   {
      location.replace('estados_sql.php?acao=excluir&codestado='+codestado);
   }
}
function detalhes(codestado)
{
   if (confirm('Você deseja visualizar os detalhes do estado nº '+codestado+' ?'))
   {
      alert('Falta Fazer');
     // location.replace('');
   }
}
function alterar(codestado)
{
   location.replace('estados.php?acao=alterar&codestado='+codestado);
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

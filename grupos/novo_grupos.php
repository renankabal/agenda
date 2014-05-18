<form name=grupos action=grupos_sql.php>
<center><table border=1 width=10%>
      <input name=acao value=novo type=hidden>
      <tr>
          <td>Nome do grupo: <input name=grupo size=25%></td>
      </tr>
      <tr>
        <td align=center>
            <a href=javascript:salvar()><img src='../imagens/salvar.png' title='Clique aqui para Salvar'></a>
            <a href=<?php echo "grupos.php?acao=lista"; ?>><img src='../imagens/cancelar.png' title='Clique aqui para cancelar e voltar'></a>
        </td>
      </tr>
</table>
</form>
</center>
<script>
function salvar()
{
   if (grupos.grupo.value == "")
   {
      alert("Por favor preencha o nome do grupo !!!");
      grupos.grupo.focus();
      exit;
   }
   document.grupos.submit();
}
</script>

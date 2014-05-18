<form name=estados action=estados_sql.php>
<center><table border=1 width=10%>
      <input name=acao value=novo type=hidden>
      <tr>
          <td>Nome do Estado: <input name=estado size=25%></td>
      </tr>
      <tr>
        <td align=center>
            <a href=javascript:salvar()><img src='../imagens/salvar.png' title='Clique aqui para Salvar'></a>
            <a href=<?php echo "estados.php?acao=lista"; ?>><img src='../imagens/cancelar.png' title='Clique aqui para cancelar e voltar'></a>
        </td>
      </tr>
</table>
</form>
</center>
<script>
function salvar()
{
   if (estados.estado.value == "")
   {
      alert("Por favor preencha o nome do Estado !!!");
      estados.estado.focus();
      exit;
   }
   document.estados.submit();
}
</script>

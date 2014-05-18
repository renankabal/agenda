<form name=grupos action=grupos_sql.php>
<center><table border=1 width=10%>
      <input name=acao value=alterar type=hidden>
      <tr>
          <td>
          <?
              echo " <input name=codgrupo value=$codgrupo type=hidden>";
              $sql_grupos="
                  SELECT
                    codgrupo, grupo
                  FROM
                    grupos
                  WHERE
                    codgrupo=$codgrupo
              ";
              $cons_grupos=pg_query($sql_grupos);
              $grupos=pg_fetch_object($cons_grupos);
              echo" <input name=grupo size=25% value='$grupos->grupo'>";
          ?>
          </td>
      </tr>
      <tr>
          <td align=center>
            <a href=javascript:salvar()><img src=../imagens/salvar.png></a>
            <a href=<?php echo "grupos.php?acao=lista"; ?>><img src=../imagens/cancelar.png></a>
          </td>
      </tr>
</form>
</table>

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

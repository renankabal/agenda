<form name=estados action=estados_sql.php>
<center><table border=1 width=10%>
      <input name=acao value=alterar type=hidden>
      <tr>
          <td>
          <?
              echo " <input name=codestado value=$codestado type=hidden>";
              $sql_estados="
                  SELECT
                    codestado, estado
                  FROM
                    estados
                  WHERE
                    codestado=$codestado
              ";
              $cons_estados=pg_query($sql_estados);
              $estados=pg_fetch_object($cons_estados);
              echo" <input name=estado size=25% value='$estados->estado'>";
          ?>
          </td>
      </tr>
      <tr>
          <td align=center>
            <a href=javascript:salvar()><img src=../imagens/salvar.png></a>
            <a href=<?php echo "estados.php?acao=lista"; ?>><img src=../imagens/cancelar.png></a>
          </td>
      </tr>
</form>
</table>

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

<form name=dispositivos action=dispositivos_sql.php>
<center><table border=1 width=10%>
      <input name=acao value=alterar type=hidden>
      <tr>
          <td>
          <?
              echo " <input name=coddispositivo value=$coddispositivo type=hidden>";
              $sql_dispositivos="
                  SELECT
                    coddispositivo, dispositivo
                  FROM
                    dispositivos
                  WHERE
                    coddispositivo=$coddispositivo
              ";
              $cons_dispositivos=pg_query($sql_dispositivos);
              $dispositivos=pg_fetch_object($cons_dispositivos);
              echo" <input name=dispositivo size=25% value='$dispositivos->dispositivo'>";
          ?>
          </td>
      </tr>
      <tr>
          <td align=center>
            <a href=javascript:salvar()><img src=../imagens/salvar.png></a>
            <a href=<?php echo "dispositivos.php?acao=lista"; ?>><img src=../imagens/cancelar.png></a>
          </td>
      </tr>
</form>
</table>

<script>
        function salvar()
        {
            if (dispositivos.dispositivo.value == "")
            {
                alert("Por favor preencha o nome do dispositivo !!!");
                dispositivos.dispositivo.focus();
                exit;
            }
        document.dispositivos.submit();
        }
</script>

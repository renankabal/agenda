<?
  include('../inc/conecta.inc');


  switch ($acao)
  {
         case novo:
               $sql_dispositivos="INSERT INTO dispositivos (dispositivo) VALUES ('$dispositivo')";
               pg_query($sql_dispositivos);
               break;
               
         case alterar:
               $sql_dispositivos="UPDATE dispositivos SET dispositivo='$dispositivo' WHERE coddispositivo=$coddispositivo";
               pg_query($sql_dispositivos);
               break;
               
         case excluir:
               $sql_dispositivos="DELETE FROM dispositivos WHERE coddispositivo=$coddispositivo";
               pg_query($sql_dispositivos);
               break;
  }
  header('location:dispositivos.php?acao=lista');
?>

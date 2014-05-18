<?
  include('../inc/conecta.inc');


  switch ($acao)
  {
         case novo:
               $sql_estados="INSERT INTO estados (estado) VALUES ('$estado')";
               pg_query($sql_estados);
               break;
               
         case alterar:
               $sql_estados="UPDATE estados SET estado='$estado' WHERE codestado=$codestado";
               pg_query($sql_estados);
               break;
               
         case excluir:
               $sql_estados="DELETE FROM estados WHERE codestado=$codestado";
               pg_query($sql_estados);
               break;
  }
   header('location:estados.php?acao=lista');
?>

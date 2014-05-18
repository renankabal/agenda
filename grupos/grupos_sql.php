<?
  include('../inc/conecta.inc');


  switch ($acao)
  {
         case novo:
               $sql_grupos="INSERT INTO grupos (grupo) VALUES ('$grupo')";
               pg_query($sql_grupos);
               break;
               
         case alterar:
               $sql_grupos="UPDATE grupos SET grupo='$grupo' WHERE codgrupo=$codgrupo";
               pg_query($sql_grupos);
               break;
               
         case excluir:
               $sql_grupos="DELETE FROM grupos WHERE codgrupo=$codgrupo";
               pg_query($sql_grupos);
               break;
  }
  header('location:grupos.php?acao=lista');
?>

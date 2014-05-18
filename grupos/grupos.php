<?
  include('../inc/conecta.inc');
  include('../inc/cabecalho.php');


  switch($acao)
  {
               case lista:
                    include('cabecalho_grupos.php');
                    include('lista_grupos.php');
                    break;
                    
               case novo;
                    include('novo_grupos.php');
                    break;
                    
               case alterar;
                    include('alterar_grupos.php');
                    break;
  }

?>

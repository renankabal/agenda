<?
  include('../inc/conecta.inc');
  include('../inc/cabecalho.php');


  switch($acao)
  {
               case lista:
                    include('cabecalho_estados.php');
                    include('lista_estados.php');
                    break;
                    
               case novo;
                    include('novo_estados.php');
                    break;
                    
               case alterar;
                    include('alterar_estados.php');
                    break;
  }

?>

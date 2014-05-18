<?
  include('../inc/conecta.inc');
  include('../inc/cabecalho.php');


  switch($acao)
  {
               case lista:
                    include('cabecalho_cidades.php');
                    include('lista_cidades.php');
                    break;
                    
               case novo;
                    include('novo_cidades.php');
                    break;
                    
               case alterar;
                    include('alterar_cidades.php');
                    break;
  }

?>

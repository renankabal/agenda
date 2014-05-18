<?
  include('../inc/conecta.inc');
  include('../inc/cabecalho.php');


  switch($acao)
  {
               case lista:
                    include('cabecalho_dispositivos.php');
                    include('lista_dispositivos.php');
                    break;
                    
               case novo;
                    include('novo_dispositivos.php');
                    break;
                    
               case alterar;
                    include('alterar_dispositivos.php');
                    break;
  }

?>

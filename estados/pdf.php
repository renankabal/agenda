<?php
/*
AUTOR: RENAN JHONATHA
DATA: 17 DE MAIO DE 2014 �S 02:15
FUN��O: GERAR DOCUMENTO EM PDF
*/
#chama a biblioteca fpdf
require('../inc/fpdf/fpdf.php');
require('../inc/conecta.inc');
#####################################################
/*               >>>>>>FUN��ES<<<<<<               */
#####################################################
$pdf = new FPDF('P','mm', 'A4');
$pdf->AliasNbPages();
$pdf->Open();  //ABRINDO O FPDF
$pdf->AddPage(); //ADICIONANDO A PRIMEIRA P�GINA
//$pdf->Image('brasao2.png',50); //INSER��O DE IMAGEM
$pdf->SetFont('Arial','',16); //FONTE DA P�GINA
$sql_estados="SELECT codestado, estado FROM estados ORDER BY estado";
$cons_estados=pg_query($sql_estados);
while ($estados=pg_fetch_object($cons_estados))
{
      $cont=$contador;
      $contador=$cont + 1;
      $pdf->Cell(10,7,$contador,1,0,1);
      $pdf->Cell(180,7,$estados->estado,1,1,1);
}
$contador;
//$pdf->Write(100,'Equipe de desenvolvimento do prod�gio');    //IMPRESS�O NA TELA
//$pdf->SetY("270");//QUEBRA A LINHA
$data=date("d/m/Y");
$conteudo="Gerado em ".$data;
//imprime uma celula... largura,altura, texto,borda,quebra de linha, alinhamento
$pdf->Cell(0,5,$conteudo,0,1);
//imprime uma celula... largura,altura, texto,borda,quebra de linha, alinhamento
$pdf->Cell(0,5,$texto,0,0);

$pdf->Output();//ABRE NO NAVEGADOR DO USU�RIO
//$pdf->Output("arquivo.pdf","D");//FAZ DOWNLOAD AUTOMATICAMENTE
?>


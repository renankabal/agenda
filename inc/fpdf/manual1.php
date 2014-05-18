


Revista PHPRevista PHP Palavra:
Categoria:    Enviar
Revista PHP / PHP
Publicado: 03/07/2007 Ver todos artigos
Alexandre Oliveira
Alexandre Oliveira
T�cnico em inform�tica com especializa��o em montagem e manuten��o decomputadores, Desenvolvimento de Sistemas, Comunica��o de Dados, acad�mico de Desenvolvimento de Sistemas Web - CEFET-TO), conhecimentos em aplica��es web... com �nfase na Linguagem PHP e banco de dados mysql.. Atualmente utilizando AJAX.


Gerando PDF com PHP
Ol� leitores da Revista PHP, os coment�rios est�o no pr�prio script.

PHP
<?php
/*
Ol� Amigos, hoje iremos aprender a gerar um arquivo PDF com nosso querido PHP
para isso , utilizaremos a  biblioteca fpdf  que se encontra em  - > http://www.fpdf.org/

Objetivo : gerar um arquivo PDF apartir do PHP em  formato de um artigo

caso tenha alguma duvida fa�a o download do manual no site do fpdf
j� possui vers�es em portugues.
os m�todos aqui utilizados estao todos  explicados no final do artigo !

bom vamos ao trabalho !
*/
//incluindo o arquivo do fpdf
require_once("fpdf/fpdf.php");
//defininfo a fonte !
define('FPDF_FONTPATH','fpdf/font/');
//instancia a classe.. P=Retrato, mm =tipo de medida utilizada no casso milimetros, tipo de folha =A4
$pdf= new FPDF("P","mm","A4");
//define a fonte  a ser usada
$pdf->SetFont('arial','',10);
//define o titulo
$pdf->SetTitle("Testando PDF com PHP !");
//assunto
$pdf->SetSubject("assunto deste artigo!");
// posicao vertical no caso -1.. e o limite da margem
$pdf->SetY("-1");
$titulo="Titulo do Artigo";
//escreve no pdf largura,altura,conteudo,borda,quebra de linha,alinhamento
$pdf->Cell(0,5,$titulo,0,0,'L');
$pdf->Cell(0,5,'http://www.seusite.com.br',0,1,'R');
$pdf->Cell(0,0,'',1,1,'L');
$pdf->Ln(8);
//hora do conteudo do artigo
$pdf->SetFont('arial','',8);
$novo="A Ag�ncia Nacional de Avia��o Civil (Anac) informou, nesta segunda-feira (2), que vai investigar se as companhias �ereas t�m culpa pelos atrasos e cancelamentos registrados durante o fim de semana.
No s�bado (30), o percentual de v�os com mais de uma hora de atrasos chegou a 45,2%. No domingo (1�), at� as 19h30, 36% dos v�os tiveram atrasos.
";
//posiciona verticalmente 21mm
$pdf->SetY("21");
//posiciona horizontalmente 30mm
$pdf->SetX("30");
//escreve o conteudo de novo.. parametros posicao inicial,altura,conteudo(*texto),borda,quebra de linha,alinhamento
$pdf->MultiCell(0,5,$novo,0,1,'J');

$novo="
Nesta segunda-feira, a situa��o come�ou a se normalizar, mas ainda h� registro de problemas. At� as 10h, dos 623 v�os previstos nos 13 principais aeroportos brasileiros, 126 tiveram atrasos de mais de uma hora, segundo balan�o divulgado pela Infraero, a estatal que administra os terminais a�reos. O n�mero equivale a 20,2% do total. Quarenta e seis decolagens foram canceladas (7,3%).
Os terminais que tiveram maiores percentuais de atrasos foram os do Recife (PE) e de Fortaleza (CE). Na Capital de Pernambuco, oito dos 24 v�os marcados at� as 10h atrasaram mais de uma hora (33,3% do total). No terminal cearense, oito das 25 partidas ocorreram fora
O terminal que registrou maior �ndice de cancelamentos foi o de Curitiba (PR). Das 22 decolagens programadas, quatro foram canceladas (18,1%).
A assessoria de Infraero informa que os atrasos s�o conseq��ncia dos transtornos do fim de semana. Muitos v�os tiveram que ser remarcados para o in�cio desta semana.
Previs�o - O presidente da Infraero, brigadeiro Jos� Carlos Pereira, tamb�m foi prejudicado pela crise a�rea. Ele tinha uma viagem marcada de Bras�lia para o Rio �s 7h desta segunda, mas o avi�o s� decolou �s 9h59.
Apesar do transtorno, ele disse que as opera��es est�o ocorrendo normalmente nos principais aeroportos do pa�s e a situa��o deve se normalizar at� as 14h.
";
//posiciona verticalmente 41mm
$pdf->SetY("41");
//posiciona horizontalmente 10mm
$pdf->SetX("10");
//escreve o conteudo de novo.. parametros posicao inicial,altura,conteudo(*texto),borda,quebra de linha,alinhamento
$pdf->MultiCell(0,5,$novo,0,1,'J');

//endereco da imagem,posicao X(horizontal),posicao Y(vertical), tamanho altura, tamanho largura
$pdf->Image("teste.jpg", 8,20,20,20);
/*******definindo o rodap�*************************/
//posiciona verticalmente 270mm
$pdf->SetY("270");
//data atual
$data=date("d/m/Y");
$conteudo="criado em ".$data;
$texto="por Alexandre Oliveira";

//imprime uma celula... largura,altura, texto,borda,quebra de linha, alinhamento
$pdf->Cell(0,0,'',1,1,'L');
//imprime uma celula... largura,altura, texto,borda,quebra de linha, alinhamento
$pdf->Cell(0,5,$texto,0,0,'L');
//imprime uma celula... largura,altura, texto,borda,quebra de linha, alinhamento
$pdf->Cell(0,5,$conteudo,0,1,'R');


//imprime a saida do arquivo..
$pdf->Output("arquivo","I");
/*
agora imaginem que estes dados viessem do banco de dados ?
que maravilha hein ! seus artigos convertidos em pdf dinamicamente hein?
************************************************************************

REFERENCIAS :
FPDF - >Esta � o construtor da classe. Ele permite que seja definido o formato da p�gina, a orienta��o e a unidade de medida usada em todos os m�todos (exeto para tamanhos de fonte).
utilizacao : FPDF([string orientation [, string unit [, mixed format]]])

SetFont -> Define a fonte que ser� usada para imprimir os caracteres de texto. � obrigat�ria a chamada, ao menos uma vez, deste m�todo antes de imprimir o texto ou o documento resultante n�o ser� v�lido.
utilizacao : SetFont(string family [, string style [, float size]])

SetTitle - >Define o t�tulo do documento.
utilizacao : SetTitle(string title)

SetSubject -> Define o assunto do documento
utilizacao : SetSubject(string subject)

SetX - >Define a abscissa da posi��o corrente. Se o valor passado for negativo, ele ser� relativo � margem direita da p�gina.
utilizacao : SetX(float x)

SetY - > Move a abscissa atual de volta para margem esquerda e define a ordenada. Se o valor passado for negativo, ele ser� relativo a margem inferior da p�gina.

utilizacao : SetY(float y)

Cell - > Imprime uma c�lula (�rea retangular) com bordas opcionais, cor de fundo e texto. O canto superior-esquerdo da c�lula corresponde � posi��o atual. O texto pode ser alinhado ou centralizado. Depois de chamada, a posi��o atual se move para a direita ou para a linha seguinte. � poss�vel p�r um link no texto.
Se a quebra de p�gina autom�tica est� habilitada e a pilha for al�m do limite, uma quebra de p�gina � feita antes da impress�o.
utilizacao - >Cell(float w [, float h [, string txt [, mixed border [, int ln [, string align [, int fill [, mixed link]]]]]]])

Ln - > Faz uma quebra de linha. A abscissa corrente volta para a margem esquerda e a ordenada � somada ao valor passado como par�metro.
utilizacao ->Ln([float h])

MultiCell - > Este m�todo permite imprimir um texto com quebras de linha. Podem ser autom�tica (assim que o texto alcan�a a margem direita da c�lula) ou expl�cita (atrav�s do caracter \n). Ser�o geradas tantas c�lulas quantas forem necess�rias, uma abaixo da outra.
O texto pode ser alinhado, centralizado ou justificado. O bloco de c�lulas podem ter borda e um fundo colorido.
utilizacao : MultiCell(float w, float h, string txt [, mixed border [, string align [, int fill]]])

Image ->Coloca uma imagem na p�gina - tipos suportados JPG PNG
utilizacao : Image(string file, float x, float y [, float w [, float h [, string type [, mixed link]]]])


Bom mais uma vez.. agrade�o se for �til..
qualquer d�vida: alexandre.etf@gmail.com !
*/
 ?>
www.revistaphp.com.br
Abra�o a todos e at� a pr�xima.
Alexandre
Op��es de Intera��o
Comentar  Fale com o colunista Indicar artigo Vers�o de impress�o Lista PHP Google  Adicionar aos Favoritos

Coment�rios
Incluir Coment�rio Ver todos
Duvida
Por: Cristiano, 15/03/2011   09:11:55
require_once("fpdf/fpdf.php"); ou require_once("fpdf/fpdf.htm");??
Na pasta que descarreguei do site n�o tem o fpdf.php
Problema com leitor de pdf
Por: Rafael, 19/10/2010   10:49:15
Estou tendo o seguinte problema, quando gero um pdf e abro com o Evince no Linux ele gera tudo certo, agora quando abro com o Evince no Windows, o meu texto aparece circundado com quadrados, n�o entendi o porque disso, e quando abro em qualquer outro leitor, o leitor acrescenta um espa�o entre as letras, agrade�o desde j� pela ajuda.
erro na impress�o...
Por: Paulo, 21/01/2010   14:20:25
Ol� ! a todos...muito bacana o artigo mas quando comecei a estuda-lo percebi que no lugar do texto saia um quadrado preto ent�o acho que encontrei a solu��o...Onde est� escrito:

$pdf->MultiCell(0,5,$novo,0,1,'J')

subtitua por:

$pdf->Write(5, $novo);

no site da fpdf tem o manual em portugu�s e l� voc�s podem tirar al�m dessa outras duvidas...

Ats...meu e-mail para qualquer coisa: ceodcolatina@gmail.com
res:
Por: richardson, 09/07/2009   16:45:37
na fun��o $pdf->MultiCell(0,5,$novo,0,1,'J'); tirei os parametros... e ficou assim...
$pdf->MultiCell(0,5,$novo,'J');

hum... num entendi bem mas achou q essa parametros j� est�o setados no fpdf.php ent�o n�o precisa passalos aqui deu certo.
function MultiCell($w, $h, $txt, $border=0, $align='J', $fill=false)
erro no texto
Por: Walter, 02/06/2009   15:29:11
funcionou direitinho, soh q o texto aparece soh um bloco preto e nao consegui arrumar... O q pode ser?
Erro ao enviar...
Por: Rafael, 10/03/2009   23:30:22
Ol�. Aqui est� aparecendo a seguinte mensagem de erro:

Warning: Cannot modify header information - headers already sent by (output started at /home/target-ti/www/mac/cadastro2.php:9) in /home/target-ti/www/mac/fpdf/fpdf.php on line 1017
FPDF error: Some data has already been output, can't send PDF file

Aparentemente est� dando erro na hora de gerar o arquivo. J� mudei as permiss�es da pasta pra 0777 e nada...
erro
Por: Winston, 29/12/2008   15:19:00
sim era erro de diretorio este diretorio tem que ficar no raiz do site
res:
Por: Alexandre, 23/12/2008   17:27:57
Boa Tarde, Winston.
novamente parece que o arquivo nao foi encontrado ...
verifique se subiu direitinho os arquivos para o servidor...
erro
Por: Winston, 23/12/2008   15:01:02
boa tarde a todos olha eu denovo
eu gosteri muito deste post esta me ajudando muito so com alguma modifica��o a minha duvida e a seguin
no servido local esta tudo as mil maravilha mais quando eu tentei subi ele esta dando este erro quem poderia me ajudar

Warning: FPDF::include(sistema/admin/cursos/pdf/fpdf/font/helvetica.php) [function.FPDF-include]: failed to open stream: No such file or directory in /home/httpd/vhosts/abaspgo.org.br/httpdocs/sistema/admin/cursos/pdf/fpdf.php on line 550

Warning: FPDF::include(sistema/admin/cursos/pdf/fpdf/font/helvetica.php) [function.FPDF-include]: failed to open stream: No such file or directory in /home/httpd/vhosts/abaspgo.org.br/httpdocs/sistema/admin/cursos/pdf/fpdf.php on line 550

Warning: FPDF::include() [function.include]: Failed opening 'sistema/admin/cursos/pdf/fpdf/font/helvetica.php' for inclusion (include_path='.:/usr/share/pear') in /home/httpd/vhosts/abaspgo.org.br/httpdocs/sistema/admin/cursos/pdf/fpdf.php on line 550
FPDF error: Could not include font metric file
Erro ao gerar PDF
Por: Alan, 23/12/2008   09:30:48
Some data has already been output, can't send PDF file -- esta dando esta mensagem de erro na hora de gerar .. Ser� que voc� pode me dar uma ajuda.
Obrigado...
O seu artigo foi muito bacana


<style>
       table
       {
        border-collapse:collapse;
       }
</style>
<title>AGENDA</title>
<center><table border=1 width=70%>
       <tr>
           <th width=10% align=center>CODCIDADE</th>
           <th width=75% align=center>CIDADE</th>
           <th width=75% align=center>ESTADO</th>
           <th width=10% align=center>COMANDOS<br>
               <a href=javascript:novo()><img src=../imagens/novo.png title="Cadastrar uma nova Cidade">
           </th>
       </tr>
       
<script>
function novo()
{
  location.replace('cidades.php?acao=novo')
}
</script>



<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
 
<?php
$nome= $_POST['nome'];
$mensagem=$_POST['mensagem'];
$msg = "Nome: $nome <br> Comentário: $mensagem";/*
$msg.= "<tr><td bgcolor='#d9e6f7'><div align='center'><font color='#000000'><strong>Comentário:</strong> $mensagem</font></div></td></tr>";//adiciona o conteudo da mensagem
$msg.= "</table>";//termina a mensagem*/
$coment = fopen("comentarios.php", "a");//arquivo em que serao postados os comentarios
fwrite($coment, "$msg");//escreve no arquivo
fclose ($coment);//fecha o arquivo
header("Location:comentarios.php");
?>
</body>
</html>

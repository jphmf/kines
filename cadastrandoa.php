<html>

<head>
<title>Realizando Cadastro</title>
</head>

<body>

<?php
$host = "localhost";
$user = "root";
$psw = "augusto1192";
$banco = "kines";
$conec = mysql_connect($host, $user, $psw) or die(mysql_error());
mysql_select_db($banco) or die(mysql_error());
?>
<?php
$nome=$_POST['nome'];
$horario=$_POST['horario'];
$cpf=$_POST['cpf_instrutor'];

$sql = mysql_query("INSERT INTO tem(horario, nome_modalidade, cpf_instrutor)
VALUES('$horario', '$nome', '$cpf')");
echo("Cadastrado!")

. mysql_error()

?>
</body>
</html>
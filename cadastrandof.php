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
$cpf=$_POST['cpf'];
$salario=(float) $_POST['salario'];
$turno=$_POST['turno'];
$numero=(int) $_POST['numero'];
$situacao=(float)$_POST['situacao'];
$telefone_func=$_POST['telefone'];
$sql = mysql_query("INSERT INTO telefone_funcionario(cpf_funcionario, telefone)
VALUES('$cpf', '$telefone_func')");
$sql = mysql_query("INSERT INTO funcionario(cpf, salario, turno, numero, nome, situacao)
VALUES('$cpf', '$salario', '$turno', '$numero', '$nome', '$situacao')");
echo("Cadastrado!")
. mysql_error()
?>
</body>
</html>
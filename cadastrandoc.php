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
//OBS nao pode ser passado acentuaçao, o BD nao aceita
$nome=$_POST['nome'];
$cpf=$_POST['cpf'];
$valor_mensal=(float) $_POST['valor_mensal'];
$sexo= $_POST['sexo'];
$numero=(int) $_POST['numero'];
$situacao=(float)$_POST['situacao'];
$telefone_cli=$_POST['telefone'];
$data_nascimento=$_POST['data_nascimento'];
print $data_nascimento;
$logradouro=$_POST['logradouro'];
$matricula=$_POST['matricula'];
$sql = mysql_query("INSERT INTO telefone_cliente(matricula_cliente, telefone)
VALUES('$matricula', '$telefone_cli')");
$sql = mysql_query("INSERT INTO cliente(matricula, valor_mensal, sexo, data_nascimento, logradouro, numero, cpf, nome, situacao)
VALUES('$matricula', '$valor_mensal', '$sexo', STR_TO_DATE('$data_nascimento', '%d/%m/%Y'), '$logradouro', '$numero', '$cpf', '$nome', '$situacao')");
echo("Cadastrado!")
. mysql_error()
?>
</body>
</html>
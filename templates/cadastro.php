<?php
	include 'db.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Cadastro de Clientes</title>
	</head>
	<body>
		<h1>Cadastro de Clientes</h1>
		<hr>
			<form method="post" action="">
				<table>
					<tr>
						<td>Nome:</td>
						<td><input type="text" name="nome"></td>
					</tr>
					<tr>
						<td>Rua:</td>
						<td><input type="text" name="rua"></td>
					</tr>
					<tr>
						<td>Número:</td>
						<td><input type="text" name="numero"></td>
					</tr>
					<tr>
						<td>Bairro:</td>
						<td><input type="text" name="bairro"></td>
					</tr>
					<tr>
						<td>Cidade:</td>
						<td><input type="text" name="cidade"></td>
					</tr>
					<tr>
						<td>UF:</td>
						<td><input type="text" name="estado"></td>
					</tr>
					<tr>
						<td>Complemento:</td>
						<td><input type="text" name="complemento"></td>
					</tr>
					<tr>
						<td>Telefone:</td>
						<td><input type="text" name="fone"></td>
					</tr>
					<tr>
						<td>CPF:</td>
						<td><input type="text" name="cpf"></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><input type="text" name="email"></td>
					</tr>
				</table>
				<input type="submit" value="Salvar">
			</form>

			<?php //inserindo as informações do cliente no banco de dados.
				if (!empty($_POST['nome'])and($_POST['rua'])and($_POST['numero'])and($_POST['bairro'])and($_POST['cidade'])and($_POST['estado'])and($_POST['fone'])and($_POST['cpf'])and($_POST['email'])){
					$nome 	= $_POST['nome'];
					$rua 	= $_POST['rua'];
					$numero = $_POST['numero'];
					$bairro = $_POST['bairro'];
					$cidade = $_POST['cidade'];
					$estado 	= $_POST['estado'];
					$complemento = $_POST['complemento'];
					$fone 	= $_POST['fone'];
					$cpf 	= $_POST['cpf'];
					$email 	= $_POST['email'];

					$erro = 0;


					$sql = mysql_query("INSERT INTO cliente(nome, rua, numero, bairro, cidade, estado, complemento, fone, cpf, email)
					VALUES('$nome','$rua', '$numero', '$bairro', '$cidade', '$estado', '$complemento', '$fone', '$cpf', '$email')");
					//header("Location: http://localhost/crud/templates/lista.php");
					echo '<h1>CADASTRADO COM SUCESSO!</h1>';
				}
				// $sql = mysql_query("DELETE FROM cliente WHERE id > 2");
			?>

		<a href="../index.php"><input type="submit" value="voltar"></a>
	</body>
</html>
<?php
	include 'db.php';



	$sql = "SELECT * FROM cliente ORDER BY  id";
	$con = mysql_query($sql) or die(mysql_error());

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Lista de Clientes</title>
	</head>
	<body>
		<h1>Lista de Clientes</h1>
		<hr>
		<table border="3" width="100%">
			<tr>
				<td>id</td>
				<td>Nome</td>
				<td>Rua</td>
				<td>Número</td>
				<td>Bairro</td>
				<td>Cidade</td>
				<td>Estado</td>
				<td>Complemento</td>
				<td>Fone</td>
				<td>CPF</td>
				<td>E-mail</td>
				<td>Deletar</td>
				<td>Editar</td>
			</tr>
		<?php while($dados = mysql_fetch_array($con)) { ?>
				<tr>
					<td><?php echo $dados['id']; ?></td>
					<td><?php echo $dados['nome']; ?></td>
					<td><?php echo $dados['rua']; ?></td>
					<td><?php echo $dados['numero']; ?></td>
					<td><?php echo $dados['bairro']; ?></td>
					<td><?php echo $dados['cidade']; ?></td>
					<td><?php echo $dados['estado']; ?></td>
					<td><?php echo $dados['complemento']; ?></td>
					<td><?php echo $dados['fone']; ?></td>
					<td><?php echo $dados['cpf']; ?></td>
					<td><?php echo $dados['email']; ?></td>
					<td><center><a href="del.php?id=<?php echo $dados['id'] ?>"><input type="submit" value="x"></a></center></td>
					<td><center><a href="atualizar.php?id=<?php echo $dados['id'] ?>"><input type="submit" value="editar"></a></center></td>

				</tr>
				
		<?php } ?>
		</table>
		
		
		<a href="../index.php"><input type="submit" value="voltar"></a>
	</body>
</html>
<?php
	include ("cliente.php");
	$listar = new Cliente();
	$valor = $listar->buscarTodos();
?>	
<table border="1">
	<th>Id</th>
	<th>Nome</th>
	<th>Telefone</th>		
	<th>Celular</th>
	<th>Email</th>
	<th>Endereço</th>
	<th>Numero</th>
	<th>Complemento</th>
	<th>Bairro</th>
	<th>Cidade</th>
	<th>CEP</th>
	<?php
		foreach($valor as $linha){
	?>
	<tr>
		<td><?php echo $linha["id"]; ?></td>
		<td><?php echo $linha["nome"]; ?></td>
		<td><?php echo $linha["telefone"]; ?></td>
		<td><?php echo $linha["celular"]; ?></td>
		<td><?php echo $linha["email"]; ?></td>
		<td><?php echo $linha["endereco"]; ?></td>
		<td><?php echo $linha["numero"]; ?></td>
		<td><?php echo $linha["complemento"]; ?></td>
		<td><?php echo $linha["bairro"]; ?></td>
		<td><?php echo $linha["cidade"]; ?></td>
		<td><?php echo $linha["cep"]; ?></td>
	</tr>
	<?php
	}		
	?>
</table>
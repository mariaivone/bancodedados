<style>
	.form{
		background-color: #BC8F8F;
		width: 400px;		
	}
	.campos{
		width: 400px;
		height: 35px;
	}
</style>
<div class="form">
<h1> Cadastro de clientes </h1>
<form action = "controllerCliente.php" method="post">
	<label> Nome </label>
		<input type="text" name="nome" class="campos"><br>
	<label> Telefone </label><br>
		<textarea name="telefone" rows="3" cols="30"></textarea><br>	
	<label> Celular </label><br>
		<textarea name="celular" rows="3" cols="30"></textarea><br>	
	<label> Email </label>	
		<input type="text" name="email" class="campos"><br>
	<label> Endereço </label>
		<input type="text" name="endereco" class="campos"><br>
	<label> Numero </label><br>
		<textarea name="numero" rows="0" cols="8"></textarea><br>	
	<label> Complemento </label><br>
		<textarea name="complemento" rows="2" cols="13"></textarea><br>
	<label> Bairro </label><br>
		<input type="text" name="bairro" class="campos"><br>
	<label> Cidade </label><br>
		<input type="text" name="cidade" class="campos"><br>
	<label> CEP </label><br>
	 <textarea name="cep" rows="2" cols="20"></textarea>
	<input type="submit" value="cadastrar">
	<input type="reset" value="limpar">	
</form>
</div>
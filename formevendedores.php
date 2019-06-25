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
<form action = "formevendedores.php" method="post">
	<label> Nome </label>
		<input type="text" name="nome" class="campos"><br>
	<label> Telefone </label><br>
		<textarea name="fone" rows="3" cols="30"></textarea><br>	
	<label> Celular </label><br>
		<textarea name="celular" rows="3" cols="30"></textarea><br>	
	<label> Email </label>	
		<input type="text" name="email" class="campos"><br>
	<label> Comissão </label>
		<textarea name="comissoa" rows="1" cols="10"></textarea><br>	
	<input type="submit" value="cadastrar">
	<input type="reset" value="limpar">	
</form>
</div>
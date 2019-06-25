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
<h1> produtos </h1>
<form action = "produtos.php" method="post">
	<label> Nome </label>
		<input type="text" name="nome" class="campos"><br>
	<label> Descricao </label><br>
		<textarea name="descricao" rows="10" cols="30"></textarea><br>	
	<label> valor </label><br>
		<textarea name="valor" rows="3" cols="30"></textarea><br>	
	
	<input type="submit" value="cadastrar">
	<input type="reset" value="limpar">	
</form>
</div>
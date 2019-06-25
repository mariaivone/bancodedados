<?php
	include_once("cliente.php");
	$listar= new Cliente();

		$nome = filter_input(INPUT_POST, "nome");
		$telefone = filter_input(INPUT_POST, "telefone");
		$celular = filter_input(INPUT_POST, "celular");
		$email = filter_input(INPUT_POST, "email");
		$endereco = filter_input(INPUT_POST, "endereco");
		$numero = filter_input(INPUT_POST, "numero");
		$complemento = filter_input(INPUT_POST, "complemento");
		$bairro = filter_input(INPUT_POST, "bairro");
		$cidade = filter_input(INPUT_POST, "cidade");
		$cep = filter_input(INPUT_POST, "cep");
		$cliente = array();
		$cliente = array($nome, $telefone, $celular, $email, $endereco, $numero, $complemento, $bairro, $cidade, $cep);		
		$listar->cadastrar($cliente);
	
?>
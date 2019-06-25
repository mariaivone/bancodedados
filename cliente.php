<?php	
	
class Cliente{
	public $id, $nome, $telefone, $celular, $email, $endereco, $numero, $complemento, $bairro, $cidade, $cep;
	
	public function setId($id){
		$this->id = $id;	
	}
	public function setNome($nome){
		$this->nome = $nome;
	}
	public function setTelefone($telefone){
		$this->telefone = $telefone;
	}
	public function setCelular($celular){
		$this->celular = $celular;
	}
	public function setEmail($email){
		$this->email = $email;
	}
	public function setEndereco($endereco){
		$this->endereco = $endereco;
	}
	public function setNumero($numero){
		$this->numero = $numero;	
	}
	public function setComplemento($complemento){
		$this->complemento = $complemento;	
	}
	public function setBairro($bairro){
		$this->bairro = $bairro;
	}
	public function setCidade($cidade){
		$this->cidade = $cidade;	
	}	
	public function setCep($cep){
		$this->cep = $cep;	
	}
	/********************************************************/
	public function getId(){
		return $this->id;
	}	
	public function getNome(){
		return $this->nome;
	}
	public function getTelefone(){
		return $this->telefone;
	}
	public function getCelular(){
		return $this->celular;
	}
	public function getEmail(){
		return $this->email;
	}
	public function getEndereco(){
		return $this->endereco;
	}
	public function getNumero(){
		return $this->numero;
	}
	public function getComplemento(){
		return $this->complemento;
	}
	public function getBairro(){
		return $this->bairro;
	}
	public function getCidade(){
		return $this->cidade;
	}
	public function getCep(){
		return $this->cep;
	}
	/********************************************************/
	public function cadastrar($cliente){		
	//	print_r($cliente);
		list($nome, $telefone, $celular, $email, $endereco, $numero, $complemento, $bairro, $cidade, $cep) = $cliente;
		
		$this->setNome($nome);
		$this->setTelefone($telefone);
		$this->setCelular($celular);
		$this->setEmail($email);
		$this->setEndereco($endereco);
		$this->setNumero($numero);
		$this->setcomplemento($complemento);
		$this->setBairro($bairro);
		$this->setCidade($cidade);
		$this->setCep($cep);
		
		$conectar = new mysqli("localhost","root","","vendas");
		$sql = "insert into clientes
					(nome, telefone, celular, email, endereco, numero, complemento, bairro, cidade, cep)	
					values (
					'{$this->getNome()}',
					'{$this->getTelefone()}', 
					'{$this->getCelular()}',
					'{$this->getEmail()}',
					'{$this->getEndereco()}',
					'{$this->getNumero()}',
					'{$this->getComplemento()}',
					'{$this->getBairro()}',
					'{$this->getCidade()}',
					'{$this->getCep()}')";	
			
		$gravar = $conectar->query($sql);
		#verificar quantos registros foram afetados com o $sql
		$num = $conectar->affected_rows;
		if($num==1) {
			echo "<fieldset>";
			echo "<h2>Os dados abaixo foram armazenados com sucesso!!!</h2>";
			echo "<br>nome: ". $this->getNome();
			echo "<br>telefone: ". $this->getTelefone();	
			echo "<br>Celular: ". $this->getCelular();
			echo "<br>email: ". $this->getEmail();
			echo "<br>endereco: ". $this->getEndereco();
			echo "<br>numero: ". $this->getNumero();
			echo "<br>complemento: ". $this->getComplemento();
			echo "<br>bairro: ". $this->getBairro();
			echo "<br>cidade: ". $this->getCidade();
			echo "<br>cep: ". $this->getCep();
			echo "</fieldset>";
		}else {
			echo "<fieldset>";
			echo "Erro ao gravar os dados";	
			echo "</fieldset>";
		}
	}
	
	
	
	public function buscarTodos(){
		$sql = "select * from clientes ORDER by nome desc ";
		$conectar = new mysqli("localhost","root","","vendas");
		$listar = $conectar->query($sql);
		$cliente = array();
		while($linha = $listar->fetch_array()) {
			$cliente[] = $linha;
		}
		return $cliente;
	}
}
?>
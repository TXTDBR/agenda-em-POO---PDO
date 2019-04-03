<?php 
class ContatoDAO {
	private $con;

	function __construct(PDO $con){
		$this->con = $con;
	}
	public function inserir(Contato $contato){

		$nome = $contato->getNome();
		$email = $contato->getEmail();
		$telefone = $contato->getTelefone();
		$dataNascimento = $contato->getDataNascimento();
	
		$qry = "insert into contato (nome,email,telefone,dataNascimento) VALUES(?,?,?,?)";
	
		$stmt = $this->con->prepare($qry);
		$stmt->bindParam(1, $nome);
		$stmt->bindParam(2, $email);
		$stmt->bindParam(3, $telefone);
		$stmt->bindParam(4, $dataNascimento);
		$stmt->execute();
	}

	public function listarContatos($id){
		if($id > 0){

		}
	}

	public function listaContatoPorId($id){
		$qry = "SELECT * FROM contato WHERE id=?";
		$stmt = $this->con->prepare($qry);
		$stmt->bindParam(1,$id);
		$stmt->execute();
	}

	private function listarContatos(){
		$qry = "SELECT * FROM contato";
		$stmt = $this->con->prepare($qry);
		$stmt->execute();
	}

	public function deleteContato($id){
		$qry = "DELETE FROM contato where id=?";
		$stmt = $this->con->prepare($qry);
		$stmt->bindPatam(1,$id);
		$stmt->execute();
	}

	public function atualize(Contato $id){
		$nome = $contato->getNome();
		$email = $contato->getEmail();
		$telefone = $contato->getTelefone();
		$dataNascimento = $contato->getDataNascimento();
		$id = $contato->getId();
		
		$qry = "UPDATE contato set nome=?, email=?, telefone=?, dataNascimento=? WHERE id=?";
		
		$stmt = $this->con->prepare($qry);
		$stmt->bindParam(1, $nome);
		$stmt->bindParam(2, $email);
		$stmt->bindParam(3, $telefone);
		$stmt->bindParam(4, $dataNascimento);
		$stmt->bindParam(5, $id);
		stmt->execute();
	}
}


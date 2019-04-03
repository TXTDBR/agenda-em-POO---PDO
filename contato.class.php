<?php

Class Contato{
	private $id;
	private $nome;
	private $email;
	private $telefone;
	private $dataNascimento;

	function __construct(){}

	function getId(){
		return $this->id;
	}

	function setId($id){
		$this->id = $id;
	}

	function getNome(){
		return $this->nome;
	}

	function setNome($nome){
		 $this->nome = $nome;
	}

	function getEmail(){
		return $this->email;
	}

	function setEmail($email){
		 $this->email = $email;
	}
	function getTelefone(){
		return $this->telefone;
	}

	function setTelefone($telefone){
		 $this->telefone = $telefone;
	}

	function getDataNascimento(){
		return $this->dataNascimento;
	}

	function setDataNascimento($dataNascimento){
		$this->dataNascimento = $dataNascimento;
	}
}
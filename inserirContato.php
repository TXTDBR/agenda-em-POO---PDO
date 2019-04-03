<?php
session_start();

require 'conexao.php';
require 'contato.class.php';
require_once 'contatoDao.class.php';

$contato = new Contato();
$contatoDao = new ContatoDAO($con);

var_dump($_POST);
$contato->setNome($_POST["nome"]);
$contato->setEmail($_POST["email"]);
$contato->setTelefone($_POST["telefone"]);
$contato->setDataNascimento($_POST["dataNascimento"]);

$contatoDao->inserir($contato);


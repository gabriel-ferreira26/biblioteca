<?php
require_once('../model/Cadastrar.php');
$sql = new Cadastrar();

$nomeAutor = $_POST["nomeAutor"];
$nascimento = $_POST['nascimento'];
$bibAutor = $_POST['bibliografia'];

$sql->cadastrarAutor($nomeAutor, $bibAutor, $nascimento);


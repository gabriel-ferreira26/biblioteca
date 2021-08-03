<?php

require_once('../model/Cadastrar.php');
$sql = new Cadastrar();

$nomeCategoria = $_POST['nomeCategoria'];
$descricaoCategoria = $_POST['descricaoCategoria'];

$sql->cadastrarCategoria($nomeCategoria, $descricaoCategoria);
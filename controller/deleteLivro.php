<?php 

require_once('../model/Deletar.php');
$sql = new Deletar;

$idLivro = $_GET('idLivro');

$sql->deletarLivro($idLivro);
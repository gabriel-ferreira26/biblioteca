<?php

require_once('../model/Cadastrar.php');
$sql = new Cadastrar();
$idLivro = $_GET['idLivro'];
print_r($idLivro);
$nomeLivro = $_POST['nomeLivro'];
$nPaginas = $_POST['nPaginas'];
$editora = $_POST['editora'];
$edicao = $_POST['edicao'];
$idioma = $_POST['idioma'];
$resumo = $_POST['resumoLivro'];
$idAutor = $_POST['idAutor'];
$idCategoria = $_POST['idCategoria'];

$edita = $sql->editarLivro(
    $idLivro,
    $nomeLivro,
    $nPaginas,
    $editora,
    $edicao,
    $idioma,
    $resumo
);

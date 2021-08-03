<?php

require_once('../model/Cadastrar.php');
$sql = new Cadastrar();

$nomeLivro = $_POST['nomeLivro'];
$nPaginas = $_POST['nPaginas'];
$editora = $_POST['editora'];
$edicao = $_POST['edicao'];
$idioma = $_POST['idioma'];
$resumo = $_POST['resumoLivro'];
$idAutor = $_POST['idAutor'];
$idCategoria = $_POST['idCategoria'];




$sql->cadastrarLivro(
    $nomeLivro,
    $nPaginas,
    $editora,
    $edicao,
    $idioma,
    $resumo,
    $idAutor,
    $idCategoria
);

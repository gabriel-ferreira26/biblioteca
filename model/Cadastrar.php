<?php

//instanciando classe de conexão

class Cadastrar
{
    /**
     * funcao de cadastro de usuario no banco de dados
     * @var string $nickname
     * @var string $senha 
     * @var string $email
     */
    public function cadastrarUsuario($nickname, $senha, $email)
    {

        require_once('db/Db.php');
        $db = new Db();

        $link = $db->conecta_mysql();

        $data = date('Y-m-d H:i:s');
        $permissao = 'user';



        $sql = "INSERT INTO 
                `usuarios`(
                `idUsuarios`, 
                `nickUsuario`, 
                `senhaUsuario`, 
                `permisaoUsuario`, 
                `emailUsuario`, 
                `dataUsuario`
                ) VALUES (
                    NULL, 
                    '$nickname', 
                    '$senha', 
                    '$permissao', 
                    '$email', 
                    '$data')";

        if (mysqli_query($link, $sql)) {
            echo "Usuario cadastrado com sucesso.<br> Faça login para continuar";
        } else {
            echo "Erro ao inserir usuario.";
        };
    }

    public function cadastrarAutor($nomeAutor, $bibAutor, $nascimento)
    {
        require_once('db/Db.php');
        $db = new Db();

        $link = $db->conecta_mysql();

        $sql = "INSERT INTO 
                `autor`(
                `idAutor`, 
                `nomeAutor`, 
                `nascimentoAutor`, 
                `bibliografiaAutor`
                ) VALUES (
                    NULL, 
                    '$nomeAutor', 
                    '$nascimento', 
                    '$bibAutor')";

        if (mysqli_query($link, $sql)) {
            echo "Autor cadastrado com suceso. <br> <a href='../index.php'> Voltar para o menu </a>";
        } else {
            echo "Erro ao inserir autor.";
        };
    }

    public function cadastrarCategoria($nome, $descricao)
    {

        require_once('db/Db.php');
        $db = new Db();

        $link = $db->conecta_mysql();

        $sql = "INSERT INTO 
                `categoria` (
                `idCategoria`, 
                `nomeCategoria`, 
                `descricaoCategoria`
                ) VALUES (
                    NULL,
                    '$nome',
                    '$descricao')";

        if (mysqli_query($link, $sql)) {
            echo "Categoria cadastrado com suceso.<br> <a href='../index.php'> Voltar para o menu </a>";
        } else {
            echo "Erro ao inserir categoria.";
        };
    }

    public function cadastrarLivro(
        $nomeLivro,
        $nPaginas,
        $editora,
        $edicao,
        $idioma,
        $resumo,
        $idAutor,
        $idCategoria
    ) {

        require_once('db/Db.php');
        $db = new Db();

        $link = $db->conecta_mysql();

        $sql = "INSERT INTO `livro` 
                    (   
                    `nomeLivro`, 
                    `paginasLivro`, 
                    `editoraLivro`, 
                    `edicaoLivro`, 
                    `idiomaLivro`, 
                    `resumoLivro`, 
                    `id_autor`, 
                    `id_categoria`
                    ) VALUES (
                 
                        '$nomeLivro',
                        $nPaginas,
                        '$editora',
                        $edicao,
                        '$idioma',
                        '$resumo',
                        $idAutor,
                        $idCategoria)";


        if (mysqli_query($link, $sql)) {
            echo "Livro cadastrado com suceso.<br> <a href='../index.php'> Voltar para o menu </a>";
        } else {
            echo "Erro ao inserir livro.";
        };
    }

    public function editarLivro(
        $idLivro,
        $nomeLivro,
        $nPaginas,
        $editora,
        $edicao,
        $idioma,
        $resumo
    ) {

        require_once('db/Db.php');
        $db = new Db();

        $link = $db->conecta_mysql();

        $sql = "UPDATE `livro` 
                SET `nomeLivro` = '$nomeLivro', 
                `paginasLivro` = '$nPaginas', 
                `editoraLivro` = '$editora', 
                `edicaoLivro` = '$edicao', 
                `idiomaLivro` = '$idioma', 
                `resumoLivro` = '$resumo' 
                WHERE `livro`.`idLivro` = $idLivro;
        ";

        print_r($sql);

        if (mysqli_query($link, $sql)) {
            echo "Livro editado com suceso.<br> <a href='../index.php'> Voltar para o menu </a>";
        } else {
            echo "Erro ao inserir livro.";
        };
    }
}

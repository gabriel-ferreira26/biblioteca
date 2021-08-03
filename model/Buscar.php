<?php

class Buscar
{

    public function listarAutor()
    {
        require_once('db/Db.php');
        $db = new Db();

        $link = $db->conecta_mysql();
        $sql = "SELECT * FROM `autor`";

        $consulta = mysqli_query($link, $sql);

        return $consulta;
    }

    public function listarCategoria()
    {
        require_once('db/Db.php');
        $db = new Db();

        $link = $db->conecta_mysql();
        $sql = "SELECT * FROM `categoria`";

        $consulta = mysqli_query($link, $sql);

        return $consulta;
    }

    public function listarLivrosCat($id)
    {
        require_once('db/Db.php');
        $db = new Db();

        $link = $db->conecta_mysql();
        $sql = "SELECT `livro`.* , 
            `categoria`.* FROM `livro` 
            INNER JOIN `categoria` ON `livro`.`id_categoria` = `categoria`.`idCategoria`
            WHERE `id_categoria` = $id";

        $consulta = mysqli_query($link, $sql);

        return $consulta;
    }

    public function listarLivros()
    {
        require_once('db/Db.php');
        $db = new Db();

        $link = $db->conecta_mysql();
        //$sql = "SELECT * FROM `livro`";
        $sql = "SELECT `livro`.* ,`categoria`.* FROM `livro` 
                INNER JOIN `categoria` 
                ON `livro`.`id_categoria` = `categoria`.`idCategoria`";

        $consulta = mysqli_query($link, $sql);
        return $consulta;
    }

    public function exibeLivro($id)
    {
        require_once('db/Db.php');
        $db = new Db();

        $link = $db->conecta_mysql();
        //$sql = "SELECT * FROM `livro`";
        $sql = "SELECT `livro`.* , `categoria`.*, `autor`.* FROM `livro` 
                INNER JOIN `categoria` ON `livro`.`id_categoria` = `categoria`.`idCategoria` 
                INNER JOIN `autor` ON `livro`.`id_autor` = `autor`.`idAutor` 
                WHERE `idLivro` = $id";

        $consulta = mysqli_query($link, $sql);
        return $consulta;
    }
}

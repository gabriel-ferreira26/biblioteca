<?php

class Deletar
{

    public function deletarLivro($idLivro)
    {

        require_once './db/Db.php';
        $db = new Db;
        $link = $db->conecta_mysql();

        $sql = "DELETE FROM `livro`
                WHERE `livro`.`idLivro` =  $idLivro";

        if (mysqli_query($link, $sql)) {
            echo "Categoria deletada com sucesso <br> <a href='../index.php'> Voltar para o menu </a>";
            
        } else {
            echo "Erro ao deletar categoria.";
        };
    }
}

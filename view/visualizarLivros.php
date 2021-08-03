<?php
require_once('../model/Buscar.php');
$sql = new Buscar;
$exibe = '';
$idCategoria = $_GET['idCategoria'];


if ($idCategoria != NULL) {
    $resultadoLivro = $sql->listarLivrosCat($idCategoria);
} else {
    $resultadoLivro = $sql->listarLivros();
}

foreach ($resultadoLivro as $resultado) {

    $exibe .= "<tr>
        <td>" . $resultado['idLivro'] . "</td>
        <td>" . $resultado['nomeLivro'] . "</td>
        <td>" . $resultado['nomeCategoria'] . "</td>
        <td>
            <a href='exibeLivro.php?idLivro=" . $resultado['idLivro'] . "'>
                <button 
                    type='button' 
                    class='btn btn-primary' 
                    name='idCategoria' 
                    value" . $resultado['idLivro'] . ">
                    Visualizar
                </button>
            </a>
    </tr>";
}

$exibe = strlen($exibe) ? ($exibe) : '
    <tr>
        <td colspan="6" class="text-center">
            Nenhum registro encontrado!
        </td>
    </tr>';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/assets/css/global.css" />
    <link rel="stylesheet" href="../public/assets/css/menu.css" />

    <title>Visualizar Livros</title>
</head>

<body>

    <section>
        <aside class="nav">
            <div class="nav-content">
                <div class="logo">
                    <img src="../public/assets/img/menu_book_white_36dp.svg" alt="logo" />
                    <h4>Bib</h4>
                </div>


                <div>
                    <nav>
                        <ul class="nav-options">
                            <li>
                                <a href="./cadastroLivro.php">Novo Livro</a>
                            </li>

                            <li>
                                <a href="./cadastroAutor.php">Novo Autor</a>
                            </li>

                            <li>
                                <a href="./cadastroCategoria.php">Nova Categoria</a>
                            </li>

                            <li>
                                <a href="../index.php">Categorias</a>
                            </li>

                            <li>
                                <a href="./visualizarLivros.php">Livros</a>
                            </li>

                        </ul>
                    </nav>
                </div>
            </div>
        </aside>
    </section>

    <section class="table-container container">
        <h1>Livros</h1>
        <div>
            <table class="table bg-light container">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Categoria</th>
                        <th>Ações</th>
                    </tr>
                </thead>

                <tbody>
                    <?= $exibe ?>
                </tbody>

            </table>
        </div>
    </section>
</body>

</html>
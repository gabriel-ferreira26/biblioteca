<?php
require __DIR__ . '/vendor/autoload.php';
require_once('model/Buscar.php');
$sql = new Buscar;
$exibe = '';
$resultadoCategoria = $sql->listarCategoria();

foreach ($resultadoCategoria as $resultado) {
    $exibe .= "<tr>
                    <td>" . $resultado['idCategoria'] . "</td>
                    <td>" . $resultado['nomeCategoria'] . "</td>
                    <td>" . $resultado['descricaoCategoria'] . "</td>
                    <td>
                        <a href='./view/visualizarLivros.php?idCategoria=". $resultado['idCategoria'] ."'>
                            <button 
                            type='button' 
                            class='btn btn-primary' 
                            name='idCategoria' 
                            value" . $resultado['idCategoria'] . ">
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
    <link rel="stylesheet" href="public/assets/css/global.css" />
    <link rel="stylesheet" href="public/assets/css/menu.css" />

    <script>

    </script>
    <title>Menu</title>
</head>

<body>
    <section>
        <aside class="nav">
            <div class="nav-content">
                <div class="logo">
                    <img src="public/assets/img/menu_book_white_36dp.svg" alt="logo" />
                    <h4>Bib</h4>
                </div>


                <div>
                    <nav>
                        <ul class="nav-options">
                            <li>
                                <a href="./view/cadastroLivro.php">Novo Livro</a>
                            </li>

                            <li>
                                <a href="./view/cadastroAutor.php">Novo Autor</a>
                            </li>

                            <li>
                                <a href="./view/cadastroCategoria.php">Nova Categoria</a>
                            </li>

                            <li>
                                <a href="#categorias">Categorias</a>
                            </li>

                            <li>
                                <a href="./view/visualizarLivros.php">Livros</a>
                            </li>

                        </ul>
                    </nav>
                </div>
            </div>
        </aside>
    </section>

    <section class="table-container container">
        <h1>Categorias</h1>
        <div>
            <table class="table bg-light container">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Categoria</th>
                        <th>Descricao</th>
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
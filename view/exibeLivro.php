<?php
require_once('../model/Buscar.php');
$sql = new Buscar;

$idLivro = $_GET['idLivro'];

$resultado = mysqli_fetch_array($sql->exibeLivro($idLivro));
//print_r($resultado);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="../public/assets/css/global.css" />
  <link rel="stylesheet" href="../public/assets/css/exibeLivro.css" />
  <link rel="stylesheet" href="../public/assets/css/menu.css" />
  <title>Livro:<?= $resultado['nomeLivro'] ?></title>
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

  <section class="register-container">
    <div class="title-container">
      <h1><?= $resultado['nomeLivro'] ?></h1>
    </div>
    <div class="book-container">
      <div class="autor-content">
        <img src="https://images.unsplash.com/photo-1532012197267-da84d127e765?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1868&q=80">
        <p><b>Autor:</b><?= $resultado['nomeAutor'] ?></p>
        <p><b>Data de nascimento:</b><?= $resultado['nascimentoAutor'] ?></p>
        <p><b>Bibliografia:</b> <?= $resultado['bibliografiaAutor'] ?></p>

        <div class="actions">
          <a href="../index.php" style="text-decoration: none;">
            <button type='button' class='btn btn-success' name='idCategoria'>
              Voltar
            </button>
          </a>


          <a href="editarLivro.php?idLivro='<?= $resultado['idLivro'] ?>'" style="text-decoration: none;">
            <button type='button' class='btn btn-primary' name='idCategoria'>
              Editar
            </button>
          </a>

          <!-- Botão para acionar modal -->
          <a href="#ExemploModalCentralizado">
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#ExemploModalCentralizado">
              Excluir
            </button>
          </a>


          <!-- Modal -->
          <div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="TituloModalCentralizado">Deseja excluir o livro permanentemente?</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  ...
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                  <button type="button" class="btn btn-primary">Confirmar</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="line" style="width: 1px"></div>

      <div class="book-content">
        <p><b>Categoria:</b><?= $resultado['nomeCategoria'] ?></p>
        <p><b>Nº de Paginas:</b><?= $resultado['paginasLivro'] ?></p>
        <p><b>Editora:</b><?= $resultado['editoraLivro'] ?></p>
        <p><b>Edição do Livro:</b><?= $resultado['edicaoLivro'] ?></p>
        <p><b>Idioma do Livro:</b><?= $resultado['idiomaLivro'] ?></p>
        <h4>Resumo do Livro:</h4>
        <p><?= $resultado['resumoLivro'] ?></p>
      </div>
    </div>

  </section>
</body>

</html>
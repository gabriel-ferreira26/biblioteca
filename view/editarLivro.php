<?php
require_once('../model/Buscar.php');
$sql = new Buscar;
$idLivro = $_GET['idLivro'];
$resultado = $sql->listarAutor();
$resultadoCategoria = $sql->listarCategoria();
$resultadoLivro = mysqli_fetch_array($sql->exibeLivro($idLivro));
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../public/assets/css/inputs.css" />
    <link rel="stylesheet" href="../public/assets/css/global.css" />
    <link rel="stylesheet" href="../public/assets/css/cadastro.css" />
    <title>Cadastro de novo livro</title>

    <script>
        function mostrarTexto() {
            document.getElementById("select-autor").innerHTML = "Caso o autor não esteja cadastrado, volto a pagina inicial e seleciona a opção cadastrar autor.";
        }
    </script>
</head>

<body>

    <section class="register-container">

        <img src="https://source.unsplash.com/400x550/?library" alt="Imagem aleatoria" />
        <a href="../index.php" style="margin:10px">
            <span class="material-icons-outlined">
                <img src="../public/assets/img/arrow_back_black_24dp.svg" alt="seta para voltar"/>
            </span>
        </a>
        <div>
            <h2>Cadastro de novo livro</h2>
            <form action="../controller/editarLivro.php?idLivro='<?=$resultadoLivro["idLivro"]?>'" method="POST">
                <input class="input-text" type="text" placeholder="Nome do livro" required name="nomeLivro" value="<?=$resultadoLivro['nomeLivro']?>"/>
                <input class="input-text" type="number" placeholder="Nº de Paginas" required name="nPaginas" value="<?=$resultadoLivro['paginasLivro']?>"/>
                <input class="input-text" type="text" placeholder="Editora" required name="editora" value="<?=$resultadoLivro['editoraLivro']?>"/>
                <input class="input-text" type="number" placeholder="Edição" required name="edicao" value="<?=$resultadoLivro['edicaoLivro']?>"/>
                <input class="input-text" type="text" placeholder="Idioma" required name="idioma" value="<?=$resultadoLivro['idiomaLivro']?>"/>
                <select id="select-autor" disabled name='idAutor' class="select" onmouseover="aparecerTexto();">
                    <option selected><?=$resultadoLivro['nomeAutor']?></option>
                    <?php while ($var = mysqli_fetch_array($resultado)){?>
                        <option  value="<?= $var['idAutor']?>"><?=$var['nomeAutor']?></option>
                    <?php };?>
                </select>
                <select id="select-categoria" disabled name="idCategoria" class="select">
                    <option selected><?=$resultadoLivro['nomeCategoria']?></option>
                    <?php while ($var = mysqli_fetch_array($resultadoCategoria)){?>
                        <option  value="<?= $var['idCategoria']?>"><?=$var['nomeCategoria']?></option>
                    <?php };?>
                </select>

                <textarea rows="6" class="text-area" name="resumoLivro" placeholder="Digite aqui o resumo do livro"><?=$resultadoLivro['resumoLivro'] ?></textarea>
                <button class="button"> Editar Livro</button>
            </form>

        </div>

    </section>
</body>

</html>
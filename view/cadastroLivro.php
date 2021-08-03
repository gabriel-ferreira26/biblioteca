<?php
require_once('../model/Buscar.php');
$sql = new Buscar;

$resultado = $sql->listarAutor();
$resultadoCategoria = $sql->listarCategoria();
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
        <a href="../index.php" style="margin:50px 50px;height: 24px;">
            <span class="material-icons-outlined">
                <img src="../public/assets/img/arrow_back_black_24dp.svg" alt="seta para voltar"/>
            </span>
        </a>
        <div>
            <h2>Cadastro de novo livro</h2>
            <form action="../controller/cadastroLivro.php" method="POST">
                <input class="input-text" type="text" placeholder="Nome do livro" required name="nomeLivro" />
                <input class="input-text" type="number" placeholder="Nº de Paginas" required name="nPaginas" />
                <input class="input-text" type="text" placeholder="Editora" required name="editora" />
                <input class="input-text" type="number" placeholder="Edição" required name="edicao" />
                <input class="input-text" type="text" placeholder="Idioma" required name="idioma" />
                <select id="select-autor" name='idAutor' class="select" onmouseover="aparecerTexto();">
                    <option selected>Selecionar Autor</option>
                    <?php while ($var = mysqli_fetch_array($resultado)){?>
                        <option  value="<?= $var['idAutor']?>"><?=$var['nomeAutor']?></option>
                    <?php };?>
                </select>
                <select id="select-categoria" name="idCategoria" class="select">
                    <option selected>Selecionar categoria</option>
                    <?php while ($var = mysqli_fetch_array($resultadoCategoria)){?>
                        <option  value="<?= $var['idCategoria']?>"><?=$var['nomeCategoria']?></option>
                    <?php };?>
                </select>

                <textarea rows="6" class="text-area" name="resumoLivro" placeholder="Digite aqui o resumo do livro"></textarea>
                <button class="button"> Cadastrar novo Livro</button>
            </form>

        </div>
        
    </section>
</body>

</html>
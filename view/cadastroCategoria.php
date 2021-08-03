<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../public/assets/css/inputs.css" />
    <link rel="stylesheet" href="../public/assets/css/global.css" />
    <link rel="stylesheet" href="../public/assets/css/cadastro.css" />
    <title>Cadastro de Categoria</title>
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
            <h2>Cadastro de Categoria</h2>
            <form action="../controller/cadastroCategoria.php" method="POST">
                <input class="input-text" type="text" placeholder="Nome da categoria" required name="nomeCategoria" />
                <textarea rows="10" class="text-area" name="descricaoCategoria" placeholder="Digite aqui a descricao da nova categoria(opcional)"></textarea>
                <button type="submit" class="button">Cadastrar categoria</button>
            </form>
        </div>

    </section>
</body>

</html>
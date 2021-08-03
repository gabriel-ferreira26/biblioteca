<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="../public/assets/css/inputs.css" />
    <link rel="stylesheet" href="../public/assets/css/global.css" />
    <link rel="stylesheet" href="../public/assets/css/cadastro.css" />
    <title>Cadastro de Autor</title>
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
            <h2>Cadastro de Autor</h2>
            <form action="../controller/cadastroAutor.php" method="POST">
                <input class="input-text" type="text" placeholder="Nome do Autor" required name="nomeAutor" />
                <input class="input-text" type="date" placeholder="Data de nascimento" required name="nascimento" />
                <textarea rows="10" class="text-area" name="bibliografia" placeholder="Digite aqui a bibliografia do autor"></textarea>
                <button class="button" type="submit">Cadastrar Autor</button>
            </form>
        </div>

    </section>
</body>

</html>
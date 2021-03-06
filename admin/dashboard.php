<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento de Conteúdo do Site</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <header>
        <div id="header-login-conteiner">
            <div id="title-conteiner">
                <h1>CMS</h1>
                <h3>Azonix Game Store&trade;<br>Gerenciamento de Conteúdo do Site</h3>
            </div>
            <div id="logo-conteiner">
                <a href="../index.html" target="_blank">
                    <img src="img/logoIcon.png" alt="">
                </a>
            </div>
        </div>
    </header>
    <main>
        <div id="dashboard-conteiner">
            <div id="category-conteiner">
                <div class="category-item">
                    <img src="img/gear.jpg" alt="Cadastrar">
                    <a href="dashboard/register-games.php">Adm. de Jogos</a>
                </div>
                <div class="category-item">
                    <img src="img/gear.jpg" alt="Cadastrar">
                    <a href="dashboard/register-genre.php">Adm. de Gêneros</a>
                </div>
                <div class="category-item">
                    <img src="img/gear.jpg" alt="Cadastrar">
                    <a href="dashboard/register-image.php">Adm. de Imagens</a>
                </div>
                <div class="category-item">
                    <img src="img/gear.jpg" alt="Cadastrar">
                    <a href="dashboard/register-user.php">Usuários</a>
                </div>
            </div>
            <div id="login-conteiner">
                <h2>Bem vindo *usuario*</h2>
                <img src="img/home.jpg" alt="">
                <a href="login.php">Logout</a>
            </div>
        </div>
    </main>
    <footer>
        <div>
            <span>Azonix Game Store&trade;</span>
        </div>
        <div class="copyright">
            <span>&copy; Copyright 2021<br>Todos os direitos reservados - Política de Privacidade</span>
        </div>
        <div class="labels">
            <span>Desenvolvido por Israel Pablo Coelho<br>versão 1.0.0</span>
        </div>
    </footer>
</body>
</html>
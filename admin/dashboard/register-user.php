<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento de Conteúdo do Site</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/form.css">
</head>
<body>
    <?php require_once('header.php');?>
    <main>
        <div class="form-conteiner">
            <form action="" method="post">
                <div class="input-conteiner">
                    <div class="input-item">
                        <label for="">Username:</label>
                        <input type="text" maxlength="10" name="" id="login">
                    </div>
                    <div class="input-item">
                        <label for="">Password:</label>
                        <input type="password" maxlength="10" name="" id="password">
                    </div>
                    <div class="input-item">
                        <label for="">Email:</label>
                        <input type="email" maxlength="50" name="" id="email">
                    </div>
                </div>
                <button type="submit">Cadastrar</button>
            </form>
        </div>
    </main>
    <?php require_once('footer.php');?>
</body>
</html>
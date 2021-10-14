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
                        <label for="">Nome:</label>
                        <input type="text" maxlength="75" name="" id="name">
                    </div>
                    <div class="input-item">
                        <label for="">URL:</label>
                        <input type="url" maxlength="90" name="" id="url">
                    </div>
                    <div class="input-item">
                        <label for="">Imagem:</label>
                        <input type="file" name="" id="image">
                    </div>
                </div>
                <button type="submit">Cadastrar</button>
            </form>
        </div>
    </main>
    <?php require_once('footer.php');?>
</body>
</html>
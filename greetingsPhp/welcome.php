<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem vindo php!</title>

    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <p>Bem bindo: <?php echo $_GET["name"] ?></p>
    <p>Seu endereço de email é: <?php echo $_GET["email"] ?></p>

    <div class="text-box">
            <a href="form.html" class="btn btn-white btn-animate">Back to form</a>
    </div>
</body>
</html>
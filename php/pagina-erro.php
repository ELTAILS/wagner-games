<?php
http_response_code(404); // Define o código HTTP correto
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL Inválida - Wagner Games</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 50px;
            background-color: #121212;
            color: #fff;
        }
        h1 {
            color: #ff4444;
        }
        a {
            color: #00aaff;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Ops! URL Inválida</h1>
    <p>O endereço que você tentou acessar não existe ou foi digitado incorretamente.</p>
    <p><a href="/index.php">Voltar para a página inicial</a></p>
</body>
</html>

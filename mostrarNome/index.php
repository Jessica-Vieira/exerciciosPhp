<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar nome</title>
</head>
<body>
    <form action="" method="POST">
        <label for="nome">Qual seu nome?</label>
        <input type="text" name="nome" id="nome" placeholder="Digite seu nome" required>
        <button type="submit">Enviar</button>
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $nome = $_POST['nome'];
            echo '<p> Olá, '.$nome.'!</p>';
        }
    ?>
</body>
</html>
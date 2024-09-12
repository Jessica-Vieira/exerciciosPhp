<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar idade</title>
</head>
<body>
    <form action="" method="POST">
        <label for="idade">Insira sua idade:</label>
        <input type="number" name="idade" id="idade" placeholder="Idade" required>
        <button type="submit">Enviar</button>
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $idade = $_POST['idade'];
            if($idade>=18){
                echo '<p>Você é maior de idade.</p>';
            }elseif($idade<0){
                echo '<p>Idade inválida.</p>';
            }else{
                echo '<p>Você é menor de idade.</p>';
            }
        }
    ?>
</body>
</html>
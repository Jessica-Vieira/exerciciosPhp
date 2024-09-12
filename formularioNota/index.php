<?php
    include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conferir notas</title>
</head>
<body>
    <form action="conferirMedia.php" method="POST">
        <input type="text" name="nome" placeholder="Insira seu nome" required>
        <input type="text" name="turma" placeholder="Insira sua turma" required>
        <input type="number" name="notaTrabalho" min="1" max="10" placeholder="Insira a nota de trabalho(0 a 10)">
        <input type="number" name="provaA" min="1" max="10" placeholder="Insira a nota da prova A(0 a 10)">
        <input type="number" name="provaB" min="1" max="10" placeholder="Insira a nota da prova B(0 a 10)">
        <button type="submit">Enviar</button>
    </form>
    <div class="resultado">
        <?php
            if(isset($_SESSION['media'])){
                echo '<p> Sua média é: '.$_SESSION['media'].'</p>';
                unset ($_SESSION['media']);
            }
            if(isset($_SESSION['reprovado'])){
                echo $_SESSION['reprovado'];
                unset($_SESSION['reprovado']);
            }elseif(isset($_SESSION['aprovado'])){
                echo $_SESSION['aprovado'];
                unset($_SESSION['aprovado']);
            }
        ?>
    </div>
</body>
</html>
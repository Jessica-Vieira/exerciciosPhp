<?php
    include 'config.php';

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome = $_POST['nome'];
        $turma = $_POST['turma'];
        $notaTrabalho = $_POST['notaTrabalho'];
        $provaA = $_POST['provaA'];
        $provaB = $_POST['provaB'];
        $media = ($notaTrabalho + $provaA + $provaB)/3;
        $_SESSION['media'] = number_format($media,1,',','');
        if($media<6){
            $_SESSION['reprovado'] = '<p>'. $nome.' da turma '.$turma.': Sua média não foi suficiente para aprovação.</p>'; 
        }else{
            $_SESSION['aprovado'] = '<p>'. $nome.' da turma '.$turma.': Você está aprovado.</p>'; 
        }
        header('Location: index.php');
        exit;
    }

    
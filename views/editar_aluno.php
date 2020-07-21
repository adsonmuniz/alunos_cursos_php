<?php
    include '../db.php';

    $id = $_POST['id'];
    $nome = $_POST['nomeAluno'];
    $nascimento = $_POST['nascimento'];

    $query = "UPDATE alunos SET nome = '$nome', data_nascimento = '$nascimento' WHERE id = $id";
    //print($query);
    mysqli_query($connection, $query);

    header('location:../index.php?page=alunos');
?>
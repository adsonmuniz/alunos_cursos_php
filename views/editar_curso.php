<?php
    include '../db.php';

    $id = $_POST['id'];
    $nome = $_POST['nomeCurso'];
    $carga = $_POST['cargaHoraria'];

    $query = "UPDATE cursos SET nome = '$nome', carga_horaria = $carga WHERE id = $id";
    //print($query);
    mysqli_query($connection, $query);

    header('location:../index.php?page=cursos');
?>
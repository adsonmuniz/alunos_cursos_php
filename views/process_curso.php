<?php

include '../db.php';

$curso = $_POST['nomeCurso'];
$cargaHoraria = $_POST['cargaHoraria'];

$query = "INSERT INTO cursos (nome, carga_horaria) VALUES ('$curso',$cargaHoraria)";

mysqli_query($connection,$query);

header('location:../index.php?page=cursos');

?>
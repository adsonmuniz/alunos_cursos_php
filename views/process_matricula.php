<?php

include '../db.php';

$aluno = $_POST['nomeAluno'];
$curso = $_POST['nomeCurso'];

$query = "INSERT INTO alunos_cursos (id_aluno, id_curso) VALUES ('$aluno','$curso')";

mysqli_query($connection,$query);

header('location:../index.php?page=matriculas');

?>
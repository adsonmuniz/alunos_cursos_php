<?php

include '../db.php';

$aluno = $_POST['nomeAluno'];
$nascimento = $_POST['nascimento'];

$query = "INSERT INTO alunos (nome, data_nascimento) VALUES ('$aluno','$nascimento')";

mysqli_query($connection,$query);

header('location:../index.php?page=alunos');

?>
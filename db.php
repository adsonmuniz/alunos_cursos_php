<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "aula_php";

$connection = mysqli_connect($server, $user, $password, $db);
$query = "select * from alunos";
$resultsAlunos = mysqli_query($connection, $query);
$query = "select * from cursos";
$resultsCursos = mysqli_query($connection, $query);
$query = "select ac.id as id, a.nome as aluno, c.nome as curso 
    from alunos_cursos ac
    left join alunos a on a.id = ac.id_aluno
    left join cursos c on c.id = ac.id_curso
    order by a.nome, c.nome";
$resultsMatriculas = mysqli_query($connection, $query);

?>
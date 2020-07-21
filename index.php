<?php

include 'db.php';
include 'header.php';
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'home';
}

switch ($page) {
    case 'alunos': include 'views/alunos.php'; break;
    case 'cursos': include 'views/cursos.php'; break;
    case 'matriculas': include 'views/matriculas.php'; break;
    case 'inserir_aluno': include 'views/inserir_aluno.php'; break;
    case 'inserir_curso': include 'views/inserir_curso.php'; break;
    case 'matricular_aluno': include 'views/matricular_aluno.php'; break;
    case 'deletar_aluno': include 'views/deletar_aluno.php'; break;
    case 'deletar_curso': include 'views/deletar_curso.php'; break;
    case 'deletar_matricula': include 'views/deletar_matricula.php'; break;
    default: include 'views/home.php'; break;
}

include 'footer.php';

?>
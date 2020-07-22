<?php

session_start();
include 'db.php';
include 'header.php';
if (isset($_SESSION['login'])) {
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = 'home';
    }
} else if (isset($_GET['page']) && $_GET['page'] == 'login') {
    $page = 'login';
} else {
    $page = 'home';
}

switch ($page) {
    case 'login': include 'views/login.php'; break;
    case 'alunos': include 'views/alunos.php'; break;
    case 'cursos': include 'views/cursos.php'; break;
    case 'matriculas': include 'views/matriculas.php'; break;
    case 'inserir_aluno': include 'views/inserir_aluno.php'; break;
    case 'inserir_curso': include 'views/inserir_curso.php'; break;
    case 'matricular_aluno': include 'views/matricular_aluno.php'; break;
    case 'deletar_aluno': include 'views/deletar_aluno.php'; break;
    case 'deletar_curso': include 'views/deletar_curso.php'; break;
    case 'deletar_matricula': include 'views/deletar_matricula.php'; break;
    case 'sair': unset($_SESSION['login']); unset($_SESSION['user']); header('location:index.php'); break;
    default: include 'views/home.php'; break;
}

include 'footer.php';

?>
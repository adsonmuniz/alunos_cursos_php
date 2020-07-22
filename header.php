<!DOCTYPE html>
<html>
    <head>
        <title>Cursos PHP & MySQL</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="js/bootstrap-4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="js/bootstrap-4.1.3/js/bootstrap.js"></script>
        <script src="https://kit.fontawesome.com/c450fce670.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <header>
            <div id="dvHeader" class="container">
                <a href="?page=home"><i class="fab fa-php"></i></a>
                <div id="login">
                    <?php
                        include "db.php";

                        if(isset($_SESSION['login']) && isset($_SESSION['user'])) 
                        {
                    ?>
                    <span id="userLogged">Bem-vindo <b><?php echo $_SESSION['user'] ?></b>. </span>
                    <a href="?page=sair">Sair<a>
                    <?php
                        } else if (!isset($_GET['page']) || $_GET['page'] != 'login')
                        {
                    ?>
                    <a href="?page=login"><i class="fas fa-sign-in-alt"></i> Login</a>
                    <?php
                        }
                    ?>
                </div>
                <div id="menu">
                    <?php
                        if (isset($_SESSION['login']))
                        {
                    ?>
                    <a href="?page=alunos">Alunos</a>
                    <a href="?page=cursos">Cursos</a>
                    <a href="?page=matriculas">Matrículas</a>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </header>
        <div id="content">


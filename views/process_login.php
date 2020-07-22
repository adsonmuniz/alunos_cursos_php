<?php

include '../db.php';

$usuario = addslashes($_POST['user']);
$senha = md5($_POST['password']);

$connection = mysqli_connect($server, $user, $password, $db);
$query = "select * from users where login='$usuario' and password='$senha'";
$resultLogin = mysqli_query($connection, $query);

if (mysqli_num_rows($resultLogin) == 1) {
    session_start();
    $_SESSION['login'] = true;
    $_SESSION['user'] = $usuario ;

    header('location:../?page=home');
} else {
    header('location:../?page=login&erroLogin');
}

?>
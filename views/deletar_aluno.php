<?php
include '../db.php';

$id = $_GET['id'];
$query = "DELETE FROM alunos WHERE id = $id";

mysqli_query($connection, $query);

header('location:index.php?page=alunos');

?>
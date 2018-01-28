<?php
session_start();
require '../include/Config.inc.php';
require '../Model/Read.php';

$id_horario = $_POST['id_horario'];
$id_aluno = $_SESSION['id_aluno'];

echo "Id Horario: $id_horario <br>";

$read = new Read();

$read->ExecutarRead("*", "horarioaluno", "where id_aluno = $id_aluno and id_horario = $id_horario");
$verificar = $read->getResultado();
if(!empty($verificar)){
    echo "<script>alert('Você já salvou esse horario');</script>";
    header("location:../View/ViewUsuarioAluno.php");
    die();
}

$result_horarioaluno = "INSERT INTO horarioaluno (id_aluno, id_horario) VALUES ('$id_aluno', '$id_horario')";
$setResult = mysqli_query($conn, $result_horarioaluno);
header("location:../View/ViewUsuarioAluno.php");


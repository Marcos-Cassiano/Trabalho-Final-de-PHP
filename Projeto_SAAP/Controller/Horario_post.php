<?php
require '../include/Config.inc.php';
$id_disciplina2 = $_REQUEST['id_disciplina'];

$result = "SELECT * FROM horario INNER JOIN professor ON horario.id_professor = professor.id WHERE professor.id_disciplina = $id_disciplina2";
$getResult = mysqli_query($conn, $result);

while ($row_h = mysqli_fetch_assoc($getResult)){
    $Horario_post[] = array(
        'id_h'  => $row_h['id_h'],
        'dia'   => date('d/m/Y', strtotime($row_h['dia'])),
        'hora'  => date('H:i', strtotime($row_h['hora'])),
    );
}

echo(json_encode($Horario_post));


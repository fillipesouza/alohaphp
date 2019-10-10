<?php
include_once("src/helpers/banco.php");

$sql = "SELECT * FROM tb_cursos";
foreach ($pdo->query($sql) as $row) {
    print $row["curso_id"] . "\t";
    print $row["nome"] . "\t";
    print $row["professor"] . "\n";
}


?>
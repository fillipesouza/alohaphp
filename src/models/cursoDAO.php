<?php 
class CursoDAO {
    private $con;
    function __construct($con){
        $this->con = $con;
    }
    function save($curso){
        $sql = "INSERT INTO tb_cursos (nome, professor) values (?,?)";
        $stmt = $this->con->prepare($sql);
        $stmt->execute(array($curso->nome, $curso->professor));
    }
}


?>
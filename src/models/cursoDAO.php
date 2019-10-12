<?php 
require_once('src/models/curso.php');
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

    function readAll(){
        $stmt = $this->con->prepare('SELECT * FROM tb_cursos');
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, "Curso", array('curso_id', 'nome', 'professor'));
        return $results;
    }
}


?>
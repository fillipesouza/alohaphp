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

    function update($curso){
        $stmt = $this->con->prepare('UPDATE tb_cursos SET nome=?,professor=? where curso_id=?');
        $stmt->execute(array($curso->nome, $curso->professor, $curso->curso_id));
        $results = $stmt->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, "Curso", array('curso_id', 'nome', 'professor'));
    }

    function delete($curso){
        $stmt = $this->con->prepare('DELETE from tb_cursos where curso_id=?');
        $stmt->execute(array($curso->curso_id));
        
    }
}


?>
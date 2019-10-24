<?php 
require_once "usuario.php";

class UsuarioDAO {
    private $con;
    public $tabela = "tb_usuarios";
    function __construct($con){
        $this->con = $con;
    }
    function save($usuario){
        $sql = "INSERT INTO ".$this->tabela." (rm,nome,senha,curso) values (?,?,?,?)";
        $stmt = $this->con->prepare($sql);
        $stmt->execute([$usuario->rm, $usuario->nome, $usuario->senha, $usuario->curso]);
    }

    function update($usuario){
        $sql = "UPDATE ".$this->tabela." SET nome=?,curso=? where rm=?";
        $stmt = $this->con->prepare($sql);
        $stmt->execute([$usuario->nome, $usuario->curso, $usuario->rm]);
    }

    function delete($rm){
        $sql = "DELETE FROM ".$this->tabela. " where rm=?";
        $stmt = $this->con->prepare($sql);
        $stmt->execute([$rm]);
    }

    function readAll(){
        $sql = "SELECT * FROM ".$this->tabela;
        $stmt = $this->con->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_CLASS, "Usuario");
        return $results;
        
    }
}

?>
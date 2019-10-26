<?php
class Usuario {
    public $rm, $nome, $senha, $curso, $admin;
    static function criaUsuario($rm,$nome,$curso){
        $usuario = new Usuario();
        $usuario->rm = $rm;
        $usuario->nome = $nome;
        $usuario->curso = $curso;
        $usuario->admin = 0;
        return $usuario;
    }
    function setarSenha($senha){
        $this->senha = md5($senha);
    }
}

?>
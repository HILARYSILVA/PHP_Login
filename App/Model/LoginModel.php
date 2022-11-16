<?php

namespace App\Model;

use App\DAO\LoginDAO;


class LoginModel extends Model
{
    public $id, $email, $senha;

    public function autenticar()
    {
        $dao = new LoginDAO();
        $dados_usuario_logado = $dao->selectByEmailAndPass($this->email, $this->senha);

        if(is_object($dados_usuario_logado)) {
            $_SESSION['usuario_logado'] = $dados_usuario_logado;

            header("Location: /");
        } else
            return null;
    }
}
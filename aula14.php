<?php

// CRUD

/*
    Create
    Read
    Update
    Delete
*/

/*
    S - Structure
    Q - Query
    L - Language
*/

class Usuario{

    public $cpf;
    public $email;
    public $senha;
    public $permissao;

    public function criar(){}
    public function getUsuario($login){}
    public function getUsuarios(){}
    public function atualizar(){}
    public function excluir(){}


}

// NO ID É PRECISO IR EM RESTRIÇÕES E DEIXAR ELA COMO PRIMARY KEY

// Criar mais 4 campos na tabela de usuario:
// excluido (bolean), data_criacao (datetime), data_atualizacao (datetime), usuario_alteracao(varchar 50)



// CRIAR TABELA PESSOA:
// nome --> varchar(500)
// sobrenome --> varchar(500)
// nome_completo --> varchar(1000)
// sexo --> enum
// email --> varchar(255)
// cpf --> varchar(11)
// cnpj --> varchar(14)
// tipo_pessoa (J ou F) --> enum
// estado_civil --> enum
// data_nascimento -- datetime
// id_usuario --> smallint









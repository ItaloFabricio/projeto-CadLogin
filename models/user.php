<?php
    //acessando o arquivo database
    //quero dizer que vou usar o database aqui
    require_once 'models/database.php';

    class User {
        
        //função para localizar usuario no banco de dados pelo email
        public static function findByEmail($email) {

            //variavel que vai a conexão do banco
            $conn = Database::getConnection();

            //variavel de estado que vai permitir executar comandos no banco
            //o prepare prepara um comando SQL que vai no banco procurar uma informação
            $stmt = $conn->prepare("SELECT * from usuarios WHERE email = :email");

            $stmt->execute(['email' => $email]);

            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

        //Função para criar usuário no banco de dados
        public static function create($data) {
            $conn = Database::getConnection();

            $stmt = $conn->prepare("INSERT INTO usuarios (nome, email, senha, perfil )
            VALUES (:nome, :email, :senha, :perfil)");

            $stmt->execute($data);
        }
    }

?> 
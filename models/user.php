<?php
//acessando o arquivo database
//quero dizer que vou usar o database aqui
require_once 'models/database.php';

class User
{

    //função para localizar usuario no banco de dados pelo email
    public static function findByEmail($email)
    {

        //variavel que vai a conexão do banco
        $conn = Database::getConnection();

        //variavel de estado que vai permitir executar comandos no banco
        //o prepare prepara um comando SQL que vai no banco procurar uma informação
        $stmt = $conn->prepare("SELECT * from usuarios WHERE email = :email");

        $stmt->execute(['email' => $email]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    //Função para criar usuário no banco de dados
    public static function create($data)
    {
        $conn = Database::getConnection();

        // Prepara uma consulta SQL para inserir um novo usuário na tabela 'usuarios'
        $stmt = $conn->prepare("INSERT INTO usuarios (nome, email, senha, perfil )
            VALUES (:nome, :email, :senha, :perfil)");
        // Executa a consulta, passando os dados do novo usuário (nome, email, senha e perfil)
        $stmt->execute($data);
    }

    public static function find($id)
    {
        $conn = Database::getConnection();
        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function update($id, $data)
    {
        $conn = Database::getConnection();
        $stmt = $conn->prepare("UPDATE usuarios SET nome = :nome, email = :email,
            perfil = :perfil WHERE id = :id");

        $data['id'] = $id;
        $stmt->execute($data);
    }

    public static function all() {
        $conn = Database::getConnection();
        $stmt = $conn->query("SELECT * from usuarios");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function delete($id) {
        $conn = Database::getConnection();
        $stmt = $conn->prepare("DELETE FROM usuarios WHERE id = :id");
        $stmt->execute(['id' => $id]);
    }
}

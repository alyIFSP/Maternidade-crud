<?php
class Usuario {
    private $conn;
    private $nome;
    private $email;
    private $senha;

    function __construct($conn) {
        $this->conn = $conn;
    }

    function get_nome() {
        return $this->nome;
    }

    function set_nome($nome) {
        $this->nome = $nome;
    }

    function get_email() {
        return $this->email;
    }

    function set_email($email) {
        $this->email = $email;
    }

    function get_senha() {
        return $this->senha;
    }

    function set_senha($senha) {
        $this->senha = $senha;
    }

    function cadastrar($email, $nome, $senha) {
        try {
            $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
            $sql = "INSERT INTO user (Email, Nome, Senha) VALUES 
                (:Email, :Nome, :Senha)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':Email', $email, PDO::PARAM_STR);
            $stmt->bindParam(':Nome', $nome, PDO::PARAM_STR);
            $stmt->bindParam(':Senha', $senhaHash, PDO::PARAM_STR);

            if ($stmt->execute()) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            // Handle any database-related errors here.
            // You can log or echo the error message for debugging.
            echo "Error: " . $e->getMessage();
            return false;
        }
    }
}
?>

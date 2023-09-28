<?php
class Autenticacao {
    private $conexao;
    public function __construct($conexao) {
        $this->conexao = $conexao;        
    }
    public function verificarUsuario($email, $senha) {
        try {
            $query = "SELECT * FROM user WHERE Email = :Email";
            $stmt = $this->conexao->prepare($query);
            $stmt->bindParam(':Email', $email, PDO::PARAM_STR);
            $stmt->execute();
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($usuario && password_verify($senha, $usuario['Senha'])) {
                return $usuario;
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

<?php
include '../biblioteca/connect.php';

//Esse arquivo insere novos serviços no banco de dados
//if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $categoria = $_POST['categoria'];
    $valor = $_POST['valor'];
/* 
    $sql = "INSERT INTO servicos (Nome, Categoria, Valor) VALUES ('$nome','$categoria','$valor')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
      
      $conn->close(); */


      try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO servicos (Nome, Categoria, Valor) VALUES ('$nome','$categoria','$valor')";
        // use exec() because no results are returned
        $conn->exec($sql);
        echo "New record created successfully";
      } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
      }
      
      $conn = null;

    //Redireciona para a página anterior para evitar envio duplicado dos dados
  //header('Location: ' . $_SERVER['HTTP_REFERER']);
  header("Location: ./../crud-vendas.php");
  exit;
 //}



// $sql = "INSERT INTO MyGuests (firstname, lastname, email)
// VALUES ('John', 'Doe', 'john@example.com')";

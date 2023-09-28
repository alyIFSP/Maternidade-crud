<?php
include '../biblioteca/connect.php';

//Esse arquivo insere novos serviços no banco de dados
//if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  //if(isset($_GET['nome'])){
    //$nome = $_POST['nome'];
    //$id = $_GET['id'];

    //$sql = "DELETE FROM servicos WHERE nome=$nome";

/*     $result = mysqli_query($conn, $sql);
    echo $result;

if ($result) { echo "Deletado com sucesso"; } else { echo "Error: " . mysqli_error($conn); } mysqli_close($conn); 

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
      
      $conn->close(); */

      /* try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $nome = $_POST['nome'];
      
        // sql to delete a record
        $sql = "DELETE FROM servicos WHERE nome = '$nome'";
      
        // use exec() because no results are returned
        $statement = $conn->prepare($sql);
        //$statement->bindParam("nome", $nome);

        $conn->exec($sql);
        echo "Record deleted successfully";
      } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
      } */

      try {

        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //$nome = $_GET['name'];
        //$name = urldecode($encodedName);
          $encodedName = $_GET['Nome'];
          $name = urldecode($encodedName);
          $id = $_GET['id'];
        
          // sql to delete a record
          //$sql = "DELETE FROM servicos WHERE Nome = :name";
          $sql = "DELETE FROM servicos WHERE id = $id";
        
          // use exec() because no results are returned
          $stmt = $conn->prepare($sql);
          //$stmt->bindParam(':name', $nome, PDO::PARAM_STR);

          $stmt->execute();
          $rowsDeleted = $stmt->rowCount();
          if ($rowsDeleted > 0) {
            echo "Record with id '$id' deleted successfully";
          } else {
              echo "No records found with id '$id'";
          }       
      } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
      }
 //}
    

    //Redireciona para a página anterior para evitar envio duplicado dos dados
    header('Location: ' . $_SERVER['HTTP_REFERER']);
   exit;
 //}
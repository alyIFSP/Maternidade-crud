<?php
include '../biblioteca/connect.php';


      try {

        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //$nome = $_GET['name'];
        //$name = urldecode($encodedName);
          //$encodedName = $_GET['Nome'];
          //$name = urldecode($encodedName);
          $id = $_POST['id'];
          $nome = $_POST['nome'];
          $categoria = $_POST['categoria'];
          $valor = $_POST['valor'];
        
          // sql to delete a record
          //$sql = "DELETE FROM servicos WHERE Nome = :name";
          $sql = "UPDATE servicos SET nome='$nome',categoria='$categoria',valor='$valor' WHERE id=$id";
        
          // use exec() because no results are returned
          $stmt = $conn->prepare($sql);
          //$stmt->bindParam(':name', $nome, PDO::PARAM_STR);

          $stmt->execute();
          $rowsDeleted = $stmt->rowCount();
          if ($rowsDeleted > 0) {
            echo "Record with id '$id' update successfully";
          } else {
              echo "No records found with id '$id'";
          }       
      } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
      }
 //}
    

    //Redireciona para a página anterior para evitar envio duplicado dos dados
    //header('Location: ' . $_SERVER['HTTP_REFERER']);
    header("Location: ./../crud-vendas.php");
   exit;
 //}
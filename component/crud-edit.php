<?php
include 'biblioteca/connect.php';

$sql = "SELECT nome, categoria, valor FROM servicos";
$result = $conn->query($sql);

 try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT id, nome, categoria, valor FROM servicos");
  $stmt->execute();

  $fetchDados = $stmt->fetchAll();


  foreach($fetchDados as $key => $value){
    echo '<tr>
            <td>'.$value['nome'].'</td>
            <td><i><a href="edit.php?id='.$value['id'].'">Editar</a></i></td>
          </tr>';
  }

} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null; 

/* try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT nome, categoria, valor FROM servicos");
  $stmt->execute();

  // Fetch all rows as an associative array
  $fetchDados = $stmt->fetchAll();

  // Generate the table
  echo '<table>';
  echo '<tr><th>Nome</th><th>Action</th></tr>';

  foreach ($fetchDados as $row) {
      echo '<tr>';
      echo '<td>' . htmlspecialchars($row['nome']) . '</td>';
      echo '<td>';
      echo '<form action="./component/delete.php" method="GET">';
      echo '<input type="hidden" name="Nome" value="' . htmlspecialchars($row['nome']) . '">';
      echo '<button type="submit"><img src="./img/icon/Crud-lixeira.png"></button>';
      echo '</form>';
      echo '</td>';
      echo '</tr>';
  }

  echo '</table>';
} catch (PDOException $e) {
  echo "Error: " . $e->getMessage();
}

$conn = null; */









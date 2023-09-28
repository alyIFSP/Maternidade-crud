<?php
include 'biblioteca/connect.php';

$sql = "SELECT nome, categoria, valor FROM servicos";
$result = $conn->query($sql);

/* if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><form action=\"./component/delete.php\" method=\"GET\">
    <td name=\"nome\">".$row["nome"]."</td>
    <td><button type=\"submit\"><img src=\"./img/icon/Crud-lixeira.png\"></button></td>
    </form>
    </tr>";
  }
} else {
  echo "0 results";
} */


 try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT id, nome, categoria, valor FROM servicos");
  $stmt->execute();

  // set the resulting array to associative
  $fetchDados = $stmt->fetchAll();


  foreach($fetchDados as $key => $value){
    echo '<tr><form action="./component/delete.php" method="GET">
    <input type="hidden" name="id" value="' . $value["id"] . '">
    <input type="hidden" name="Nome" value="'.htmlspecialchars($value["nome"]).'">
    <td name="Nome">'.htmlspecialchars($value["nome"]).'</td>
    <td><button type="submit"><img src="./img/icon/Crud-lixeira.png"></button></td>
    </form>
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









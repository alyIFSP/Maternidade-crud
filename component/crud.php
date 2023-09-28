<?php
include 'biblioteca/connect.php';

/* $sql = "SELECT nome, categoria, valor FROM servicos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr>
    <td>".$row["nome"]."</td>
    <td>".$row["categoria"]."</td>
    <td>15/02/2015</td>
    <td>$".$row["valor"]."</td>
    <td><a href=\"editar.php\" style=\"color: #000000\">Editar</a></td>
    <td><i><img src=\"img/icon/Crud-lixeira.png\" ></i></td>
</tr>";
  }
} else {
  echo "0 results";
}
 */


 try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT id,nome, categoria, valor FROM servicos");
  $stmt->execute();

  // set the resulting array to associative
  $fetchDados = $stmt->fetchAll();


  foreach($fetchDados as $key => $value){
    echo "<tr><td>".$value["nome"]."</td>
    <td>".$value["categoria"]."</td>
    <td>15/02/2015</td>
    <td>$".$value["valor"]."</td>
    <td><a href=\"./crud-vendas_edit.php?id=".$value['id']."&nome=".$value['nome']."&valor=".$value['valor']."\" style=\"color: #000000\" class=\"editar\">Editar</a></td>
    ";
  }

} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
            

// $sql = "INSERT INTO MyGuests (firstname, lastname, email)
// VALUES ('John', 'Doe', 'john@example.com')";
/* <td><i><img src=\"img/icon/Crud-lixeira.png\" ></i></td></tr> */
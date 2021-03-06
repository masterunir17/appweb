<?php

/**
 * Delete a user
 */

require "../config.php";
require "../common.php";

if (isset($_GET["id"])) {
  try {
    $connection = new PDO($dsn, $username, $password, $options);
  
    $id = $_GET["id"];

    $sql = "DELETE FROM gastronomia WHERE id = :id";

    $statement = $connection->prepare($sql);
    $statement->bindValue(':id', $id);
    $statement->execute();

    $success = "Hotel Borrado con exito";
  } catch(PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
  }
}

try {
  $connection = new PDO($dsn, $username, $password, $options);

  $sql = "SELECT * FROM gastronomia";

  $statement = $connection->prepare($sql);
  $statement->execute();

  $result = $statement->fetchAll();
} catch(PDOException $error) {
  echo $sql . "<br>" . $error->getMessage();
}
?>
<?php require "templates/header.php"; ?>
        
<h2>Borrar Restaurantes</h2>

<?php if ($success) echo $success; ?>

<table>
  <thead>
    <tr>
         <th>#</th>
          <th>Restaurante</th>
          <th>Direccion</th>
          <th>Precio</th>
          <th>Ubicacion</th>
		  <td>Tipo de Cocina</td>
		  <td>Tenedores</td>
          <th>Valoracion</th>
          <th>Date</th>
      <th>BORRAR</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($result as $row) : ?>
    <tr>
          <td><?php echo escape($row["id"]); ?></td>
          <td><?php echo escape($row["restaurante"]); ?></td>
          <td><?php echo escape($row["direccion"]); ?></td>
          <td><?php echo escape($row["precio"]); ?></td>
          <td><?php echo escape($row["ubicacion"]); ?></td>
		  <td><?php echo escape($row["tipococina"]); ?></td>
		  <td><?php echo escape($row["tenedores"]); ?></td>
          <td><?php echo escape($row["valoracion"]); ?></td>
          <td><?php echo escape($row["date"]); ?> </td>
      <td><a href="delete_r.php?id=<?php echo escape($row["id"]); ?>">Borrar</a></td>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>

<a href="index.php">Menu principal. Gestion datos</a>

<?php require "templates/footer.php"; ?>
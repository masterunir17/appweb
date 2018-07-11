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

    $sql = "DELETE FROM hoteles WHERE id = :id";

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

  $sql = "SELECT * FROM hoteles";

  $statement = $connection->prepare($sql);
  $statement->execute();

  $result = $statement->fetchAll();
} catch(PDOException $error) {
  echo $sql . "<br>" . $error->getMessage();
}
?>
<?php require "templates/header.php"; ?>
        
<h2>Borrar Hoteles</h2>

<?php if ($success) echo $success; ?>

<table>
  <thead>
    <tr>
      <th>#</th>
      <th>Nombre</th>
      <th>Direccion</th>
      <th>Precio</th>
      <th>Ubicacion</th>
      <th>Valoracion</th>
      <th>Date</th>
      <th>BORRAR</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($result as $row) : ?>
    <tr>
      <td><?php echo escape($row["id"]); ?></td>
      <td><?php echo escape($row["nombre"]); ?></td>
      <td><?php echo escape($row["direccion"]); ?></td>
      <td><?php echo escape($row["precio"]); ?></td>
      <td><?php echo escape($row["ubicacion"]); ?></td>
      <td><?php echo escape($row["valoracion"]); ?></td>
      <td><?php echo escape($row["date"]); ?> </td>
      <td><a href="delete_h.php?id=<?php echo escape($row["id"]); ?>">Borrar</a></td>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>

<a href="index.php">Menu principal. Gestion datos</a>

<?php require "templates/footer.php"; ?>
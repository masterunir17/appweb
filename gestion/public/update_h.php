<?php

/**
 * List all users with a link to edit
 */

require "../config.php";
require "../common.php";

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
        
<h2>Update users</h2>

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
            <th>Edit</th>
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
            <td><a href="update-single_h.php?id=<?php echo escape($row["id"]); ?>">Edit</a></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<a href="index.php">Menu principal. Gestion datos</a>

<?php require "templates/footer.php"; ?>
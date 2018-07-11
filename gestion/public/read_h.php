<?php

/**
 * Function to query information based on 
 * a parameter: in this case, ubicacion.
 *
 */

require "../config.php";
require "../common.php";

if (isset($_POST['submit'])) {
  if (!hash_equals($_SESSION['csrf'], $_POST['csrf'])) die();

  try  {
    $connection = new PDO($dsn, $username, $password, $options);

    $sql = "SELECT * 
            FROM hoteles
            WHERE ubicacion = :ubicacion";

    $ubicacion = $_POST['ubicacion'];
    $statement = $connection->prepare($sql);
    $statement->bindParam(':ubicacion', $ubicacion, PDO::PARAM_STR);
    $statement->execute();

    $result = $statement->fetchAll();
  } catch(PDOException $error) {
      echo $sql . "<br>" . $error->getMessage();
  }
}
?>
<?php require "templates/header.php"; ?>
        
<?php  
if (isset($_POST['submit'])) {
  if ($result && $statement->rowCount() > 0) { ?>
    <h2>Results</h2>

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
        </tr>
      <?php endforeach; ?>
      </tbody>
    </table>
    <?php } else { ?>
      <blockquote>No se han encontrado registros para <?php echo escape($_POST['ubicacion']); ?>.</blockquote>
    <?php } 
} ?> 

<h2>Encontrado Hoteles basados en la ubicacion</h2>

<form method="post">
  <input name="csrf" type="hidden" value="<?php echo escape($_SESSION['csrf']); ?>">
  <label for="ubicacion">ubicacion</label>
  <input type="text" id="ubicacion" name="ubicacion">
  <input type="submit" name="submit" value="View Results">
</form>

<a href="index.php">Menu principal. Gestion datos</a>

<?php require "templates/footer.php"; ?>
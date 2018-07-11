<?php

/**
 * Use an HTML form to create a new entry in the
 * users table.
 *
 */

require "../config.php";
require "../common.php";

if (isset($_POST['submit'])) {
  if (!hash_equals($_SESSION['csrf'], $_POST['csrf'])) die();

  try  {
    $connection = new PDO($dsn, $username, $password, $options);
    
    $new_user = array(
      "nombre" => $_POST['nombre'],
      "direccion" => $_POST['direccion'],
	  "precio" => $_POST['precio'],	  
      "ubicacion" => $_POST['ubicacion'],
      "valoracion" => $_POST['valoracion']
    );

    $sql = sprintf(
      "INSERT INTO %s (%s) values (%s)",
      "hoteles",
      implode(", ", array_keys($new_user)),
      ":" . implode(", :", array_keys($new_user))
    );
    
    $statement = $connection->prepare($sql);
    $statement->execute($new_user);
  } catch(PDOException $error) {
      echo $sql . "<br>" . $error->getMessage();
  }
}
?>
<?php require "templates/header.php"; ?>

  <?php if (isset($_POST['submit']) && $statement) : ?>
    <blockquote><?php echo escape($_POST['nombre']); ?> successfully added.</blockquote>
  <?php endif; ?>

  <h2>Añadir Hotel</h2>

  <form method="post">
    <input name="csrf" type="hidden" value="<?php echo escape($_SESSION['csrf']); ?>">
    <label for="nombre">Nombre del hotel</label>
    <input type="text" name="nombre" id="nombre">
    <label for="direccion">Direccion</label>
    <input type="text" name="direccion" id="direccion">
    <label for="precio">Precio medio</label>
    <input type="text" name="precio" id="precio">
    <label for="ubicacion">Ubicacion</label>
    <input type="text" name="ubicacion" id="ubicacion">
    <label for="valoracion">Valoracion</label>
    <input type="text" name="valoracion" id="valoracion">
    <input type="submit" name="submit" value="Submit">
  </form>

  <a href="index.php">Menu principal. Gestion datos</a>

<?php require "templates/footer.php"; ?>

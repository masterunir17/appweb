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
      "apellido"  => $_POST['apellido'],
      "correo"     => $_POST['correo'],
      "edad"       => $_POST['edad']
    );

    $sql = sprintf(
      "INSERT INTO %s (%s) values (%s)",
      "clientes",
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
    <blockquote><?php echo escape($_POST['nombre']); ?> Alta generada.</blockquote>
  <?php endif; ?>

  <h2>Alta de cliente</h2>

  <form method="post">
    <input name="csrf" type="hidden" value="<?php echo escape($_SESSION['csrf']); ?>">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre">
    <label for="apellido">Apellido</label>
    <input type="text" name="apellido" id="apellido">
    <label for="correo">correo</label>
    <input type="text" name="correo" id="correo">
    <label for="edad">edad</label>
    <input type="text" name="edad" id="edad">

    <input type="submit" name="submit" value="Submit">
  </form>

  <a href="index.php">Pagina principal</a>

<?php require "templates/footer.php"; ?>

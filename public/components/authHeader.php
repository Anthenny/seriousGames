<?php
  session_start();
  if(isset($_POST["uitloggen"])){
    session_destroy();
    header('location: ./login.php');
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/auth.css" />
    <title><?php $paginaTitel ?></title>
  </head>
  <body>
    <header>
      <div class="logo">
        <img src="../img/controller.png" alt="Serious Games logo" />
        <h3>Serious Games</h3>
      </div>
      <nav>
        <a href="./home.php">Home</a>
        <?php
          if(!isset($_SESSION["naam"])){ ?>

            <a href="./login.php">Inloggen</a>
            <a href="./registreren.php">Registreren</a>
            <a href="./leerlingen.php">Leerlingen</a>
          <?php } else { ?>

            <a href="#">Games</a>
            <form action="<?= $_SERVER["PHP_SELF"]; ?>" method="post">>
              <button type="submit" name="uitloggen">Uitloggen</button>
            </form>

          <?php  } ?>

      </nav>
    </header>
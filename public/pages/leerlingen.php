<?php
  require_once '../../private/init.php';
  $paginaTitel = 'leerlingen';
  require_once '../components/authHeader.php';

?>

<main>
        <h1>Hallo, <?= $_SESSION["naam"] ?></h1>
    </main>

<?php
  require_once '../components/authFooter.php';
?>
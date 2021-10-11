<?php

  require_once '../../private/init.php';
  $paginaTitel = 'Registreren';
  require_once '../components/authHeader.php';

  if(isset($_POST["registreren"])){
    $gebruiker = new AuthContr();
    $gebruiker->createGebruiker();
  }

?>

    <main>
      <h1>Registreren</h1>
      <form  action="<?= $_SERVER["PHP_SELF"]; ?>" method="post">
        <input type="text" name="naam" placeholder="Vul jouw naam in" />
        <input type="email" name="email" placeholder="Vul jouw email in" />
        <input type="text" name="klas" placeholder="Vul jouw klas in" />
        <input type="password" name="wachtwoord" placeholder="Vul jouw wachtwoord in" />
        <input type="password" name="bevestigWachtwoord" placeholder="Bevestig jouw wachtwoord" />
        <button type="submit" name="registreren">Registreren</button>
      </form>
    </main>

<?php
  require_once '../components/authFooter.php';
?>

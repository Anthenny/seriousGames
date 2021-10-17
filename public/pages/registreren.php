<?php

  require_once '../../private/init.php';
  $paginaTitel = 'Registreren';
  require_once '../components/authHeader.php';

  if(isset($_POST["registreren"])){
    $gebruiker = new AuthContr();
    $gebruiker->createGebruiker();
  }

?>

    <div class="auth__container">
      <h1>Registreren</h1>
      <form  action="<?= $_SERVER["PHP_SELF"]; ?>" method="post">
        <input type="text" name="naam" placeholder="Vul jouw naam in" />
        <input type="email" name="email" placeholder="Vul jouw email in" />
        <label for="klasId"> Kies jouw klas</label>
        <select name="klasId" id="klasId">
          <option value="1">Groep 1</option>
          <option value="2">Groep 2</option>
          <option value="3">Groep 3</option>
          <option value="4">Groep 4</option>
          <option value="5">Groep 5</option>
          <option value="6">Groep 6</option>
          <option value="7">Groep 7</option>
          <option value="8">Groep 8</option>
        </select>
        <input type="password" name="wachtwoord" placeholder="Vul jouw wachtwoord in" />
        <input type="password" name="bevestigWachtwoord" placeholder="Bevestig jouw wachtwoord" />
        <button type="submit" name="registreren">Registreren</button>
      </form>
    </div>

<?php
  require_once '../components/authFooter.php';
?>

<?php

  require_once '../../private/init.php';
  $paginaTitel = 'Login';
  require_once '../components/authHeader.php';

  if(isset($_POST["login"])) {
    $gebruiker = new AuthContr();
    $gebruiker->loginGebruiker();
  }

?>

    <div class="auth__container">
      <h1>Login</h1>
      <form action="<?= $_SERVER["PHP_SELF"]; ?>" method="post">
        <input type="text" name="email" placeholder="Vul jouw email in" />
        <input type="password" name="wachtwoord" placeholder="Vul jouw wachtwoord in" />
        <button type="submit" name="login">Login</button>
      </form>
    </div>

<?php
  require_once '../components/authFooter.php';
?>

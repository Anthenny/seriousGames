<?php
  require_once '../../private/init.php';
  $paginaTitel = "Edit Leerling";
  include_once '../components/authHeader.php';

    $gebruikerController = new GebruikerContr();
    $gebruiker = $gebruikerController->vindGebruiker();

    if(isset($_POST["editBtn"])) {
        $gebruikerController->editGebruiker();
    }
?>

    <div class="edit__container">
        <div class="form__container">
            <h1>Edit Leerling</h1> 
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                <div class="item">
                    <p>Naam :</p>
                    <input type="text" name="naam" value="<?= $gebruiker["naam"] ?>" />
                </div>
                <div class="item">
                    <p>Email :</p>
                    <input type="email" name="email" value="<?= $gebruiker["email"] ?>" />
                </div>
                <div class="item">
                    <p>Klas :</p>
                    <input type="text" name="klas" value="<?= $gebruiker["klas"] ?>" />
                </div>
                <div class="item">
                    <p>Rol :</p>
                    <input type="text" name="rol" value="<?= $gebruiker["rol"] ?>" />
                </div>
                <div class="item">
                    <p>Aantal Games :</p>
                    <input type="text" name="aantalGames" value="<?= $gebruiker["aantalGames"] ?>" />
                    <input type="hidden" name="id"   value="<?= $gebruiker["id"] ?>">
                </div>
                <button type="submit" name="editBtn">Edit</button>
            </form>
        </div>
    </div>
  </body>
</html>
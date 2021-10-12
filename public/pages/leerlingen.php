<?php
  require_once '../../private/init.php';
  $paginaTitel = 'leerlingen';
  require_once '../components/authHeader.php';

  $gebruikerView = new GebruikerView();
  $gebruikerController = new GebruikerContr();

  if(isset($_GET["deleteLeerlingId"]))  $gebruikerController->removeGebruiker();
  if(isset($_POST["add"])) $gebruikerController->maakGebruiker();

?>

<div class="leerlingen__container">
    <div class="leerlingen__tabel">
            <table>
              <thead> 
                <th>ID</th>
                <th>Naam</th>
                <th>Klas</th>
                <th>Aantal games</th>
                <th>Actie</th>
              </thead>
              <tbody> 

                <?php foreach($gebruikerView->showGebruikers() as $gebruiker) { ?>
                <tr>
                  <td><?php echo $gebruiker['id'] ?></td>
                  <td><?php echo $gebruiker['naam'] ?></td>
                  <td><?php echo $gebruiker['klas'] ?></td>
                  <td><?php echo $gebruiker['aantalGames'] ?></td>
                  <td class="buttons">
                    <a href="editLeerling.php?editLeerlingId=<?= $gebruiker['id']?>" class="btn btn-edit">Edit</a>
                    <a href="leerlingen.php?deleteLeerlingId=<?= $gebruiker['id']?>" class="btn btn-delete">Delete</a>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
            <button class="btn-leerling">Maak een leerling</button>
          </div>

          <div class="modal-leerling">
            <div class="box">
              <div class="header">
                <div class="close-leerling"><p>X</p></div>
                <h1>Maak een leerling</h1>
              </div>

              <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                <div class="item">
                  <p>Leerling</p>
                  <input type="text" name="naam" />
                </div>
                <div class="item">
                  <p>Email</p>
                  <input type="email" name="email" />
                </div>
                <div class="item">
                  <p>Klas</p>
                  <input type="text" name="klas" />
                </div>
                <div class="item">
                  <p>Wachtwoord</p>
                  <input type="password" name="wachtwoord" />
                </div>
                <button type="submit" name="add">Voeg toe</button>
              </form>
          </div>
        </div>
        <script src="../js/modal.js"></script>
    </div>

<?php
  require_once '../components/authFooter.php';
?>
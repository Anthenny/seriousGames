<?php 

require_once(__DIR__.'/../models/gebruikers.model.php');

class GebruikerContr extends Gebruikers {

  public function maakGebruiker() {
    $this->naam = $_POST["naam"];
    $this->email = $_POST["email"];
    $this->klas = $_POST["klas"];
    $this->rol = "student";
    $this->aantalGames = 0;
    $this->wachtwoord = $_POST["wachtwoord"];

    $hashedWachtwoord = password_hash($this->wachtwoord, PASSWORD_BCRYPT);

    $this->setGebruiker($this->naam, $this->email, $this->klas, $this->rol, $this->aantalGames, $hashedWachtwoord );
    header("Location: ../../public/pages/leerlingen.php");
  }

  public function vindGebruiker() {
    $id = $_GET["editLeerlingId"];
    $gebruiker = $this->getGebruiker($id);

    return $gebruiker; 

  }
 
  public function removeGebruiker() {
    $id = $_GET["deleteLeerlingId"];
    $this->deleteGebruiker($id);
    header("Location: ../../public/pages/leerlingen.php");

  }
 
  public function editGebruiker() {
    $naam = $_POST["naam"];
    $email = $_POST["email"];
    $klas = $_POST["klas"];
    $rol = $_POST["rol"];
    $aantalGames = $_POST["aantalGames"];
    $id = $_POST["id"];

    $this->updateGebruiker($naam, $email, $klas, $rol, $aantalGames, $id);
    header("Location: ../../public/pages/leerlingen.php");

  }
}
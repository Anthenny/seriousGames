<?php 
// Gebruikers laten zien, update delete
require_once(__DIR__.'/../config/db.php');

class Gebruikers extends Db {
  protected $naam;
  protected $email;
  protected $klasId;
  protected $rol;
  protected $wachtwoord;

  
    public function getGebruikers() {
      $sql = "SELECT gebruikers.id, gebruikers.naam, gebruikers.email, klassen.klas_naam, gebruikers.rol FROM gebruikers INNER JOIN klassen ON gebruikers.klas_id = klassen.klas_id WHERE rol = 'student'
      ";

      $stmt = $this->connect()->prepare($sql);
      $stmt->execute(); 
      
      $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
      return $results;  

    }

    protected function getGebruiker($id) {
      $sql = "SELECT gebruikers.id, gebruikers.naam, gebruikers.email, klassen.klas_naam, gebruikers.rol FROM gebruikers INNER JOIN klassen ON gebruikers.klas_id = klassen.klas_id
      WHERE id = ?"; 
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$id]);
  
      $results = $stmt->fetch(PDO::FETCH_ASSOC);
      return $results;
    }

    protected function setGebruiker($naam, $email, $klasId, $rol, $wachtwoord) {
      $sql = "INSERT INTO gebruikers (naam, email, klas_id, rol, wachtwoord) VALUES (?, ?, ?, ?, ?)" ;
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$naam, $email, $klasId, $rol, $wachtwoord]);  
    }

    protected function updateGebruiker($naam, $email, $klasId, $rol, $id) {
      $sql = "UPDATE gebruikers SET naam = ?, email = ?, klas_id = ?, rol = ?, WHERE id = ? LIMIT 1";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$naam, $email, $klasId, $rol, $id]);
    }

    protected function deleteGebruiker($id) {
      $sql = "DELETE FROM gebruikers WHERE id = ?";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$id]);
    }
  
};
<?php 
// Gebruikers laten zien, update delete
require_once(__DIR__.'/../config/db.php');

class Gebruikers extends Db {
  
    public function getGebruikers() {
      $sql = "SELECT * FROM gebruikers";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute();
      
      $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
      return $results;  

    }

    protected function getGebruiker($id) {
      $sql = "SELECT * FROM gebruikers WHERE id = ?";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$id]);
  
      $results = $stmt->fetch(PDO::FETCH_ASSOC);
      return $results;
    }

    protected function setGebruiker($naam, $email, $klas, $rol, $aantalGames, $wachtwoord) {
      $sql = "INSERT INTO gebruikers (naam, email, klas, rol, aantalGames, wachtwoord) VALUES (?, ?, ?, ?, ?, ?)" ;
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$naam, $email, $klas, $rol, $aantalGames, $wachtwoord]);  
    }

    protected function updateGebruiker($naam, $email, $klas, $rol, $aantalGames, $id) {
      $sql = "UPDATE gebruikers SET naam = ?, email = ?, klas = ?, rol = ?, aantalGames = ? WHERE id = ? LIMIT 1";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$naam, $email, $klas, $rol, $aantalGames, $id]);
    }

    protected function deleteGebruiker($id) {
      $sql = "DELETE FROM gebruikers WHERE id = ?";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$id]);
    }
  
};
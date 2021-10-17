<?php
 
 class Db {

  private $gebruikersNaam = "root";
  private $wachtwoord = "";

  public function connect() {
    try {
      $dsn = 'mysql:host=localhost;dbname=seriousgames';
      $pdo = new PDO($dsn, $this->gebruikersNaam, $this->wachtwoord);
      $pdo->setAttribute(PDO::ERRMODE_EXCEPTION, PDO::ATTR_CASE);
      return $pdo;

    } catch (PDOException $e) {
      echo "connectie mislukt" . $e->getMessage();
    }
  }
}
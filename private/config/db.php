<?php
 
 class Db {

  private $gebruikersNaam = "root";
  private $wachtwoord = "";
  private $host = "localhost";
  private $dbName = "seriousgames";

  public function connect() {
    try {
      $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
      $pdo = new PDO($dsn, $this->gebruikersNaam, $this->wachtwoord);
      $pdo->setAttribute(PDO::ERRMODE_EXCEPTION, PDO::ATTR_CASE);
      return $pdo;

    } catch (PDOException $e) {
      echo "connectie mislukt" . $e->getMessage();
    }
  }
}
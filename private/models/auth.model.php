<?php

require_once(__DIR__.'/../config/db.php');


class Auth extends Db {
    protected $naam;
    protected $email;
    protected $klas;
    protected $rol;
    protected $aantalGames;
    protected $wachtwoord;

    protected function getGebruikers() {
        $sql = "SELECT * FROM gebruikers";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }

    protected function getGebruiker($email) {
        $sql = "SELECT * FROM gebruikers WHERE email = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$email]);

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    protected function setGebruiker($naam, $email, $klas, $rol, $aantalGames, $wachtwoord) {
        $sql = "INSERT INTO gebruikers (naam, email, klas, rol, aantalGames, wachtwoord) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$naam, $email, $klas, $rol, $aantalGames, $wachtwoord]); 
    }
}
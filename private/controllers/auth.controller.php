<?php
require_once (__DIR__.'/../models/auth.model.php');

class AuthContr extends Auth {

    public function createGebruiker() {
        $this->naam = $_POST["naam"];
        $this->email = $_POST["email"];
        $this->klasId = $_POST["klasId"];
        $this->rol = "student"; 
        $this->wachtwoord = $_POST["wachtwoord"];
 
        $hashedWachtwoord = password_hash($this->wachtwoord, PASSWORD_BCRYPT);

        $this->setGebruiker($this->naam, $this->email, $this->klasId, $this->rol, $hashedWachtwoord );
        header('location: ../../public/pages/login.php');
    }

    public function loginGebruiker() {
        $this->email = $_POST["email"];
        $this->wachtwoord = $_POST["wachtwoord"];

        $gebruiker = $this->getGebruiker($this->email);

        if(!$gebruiker){
            header('location: ../../public/pages/login.php?verkeerdeemail');
            echo "Kon niemand vinden met deze naam!";
            return;
        }

        if($gebruiker["email"] === $this->email){
            if(!password_verify($this->wachtwoord, $gebruiker["wachtwoord"])){
                header('location: ../../public/pages/login.php?verkeerdwachtwoord');
                echo "U heeft een fout wachtwoord ingevuld";
                return;
            }

            session_start();
            $_SESSION["naam"] = $gebruiker["naam"];
            $_SESSION["rol"] = $gebruiker["rol"];
            $_SESSION["studentId"] = $gebruiker["id"];
            
            if($gebruiker["rol"] === "student") {
                header('location: ../../public/pages/home.php');
            }

            if($gebruiker["rol"] === "leraar") {
                header('location: ../../public/pages/leerlingen.php');
            }

        } else {
            echo "Controleer uw gegevens aub";
        }


    }
}
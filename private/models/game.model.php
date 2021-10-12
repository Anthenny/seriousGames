<?php

require_once(__DIR__.'/../config/db.php');

class Game extends Db {
    protected $score;
    protected $id;
    // protected student_id
    // voeg bij set game id toe van student via foreing key

    protected function setGame($score, $id){
        $sql = "INSERT INTO games (score, id) VALUES (?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$score, $id]);
    }
}
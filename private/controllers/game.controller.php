<?php

require_once(__DIR__.'/../models/game.model.php');

class GameController extends Game {

    public function saveGame() {
        $juisteAntwoorden = ["345", "506", "81", "24", "19", "385", "105", "145", "51", "44"];
        $score = 0;
        $question_1 = $_POST["q1"];
        $question_2 = $_POST["q2"];
        $question_3 = $_POST["q3"];
        $question_4 = $_POST["q4"];
        $question_5 = $_POST["q5"];
        $question_6 = $_POST["q6"];
        $question_7 = $_POST["q7"];
        $question_8 = $_POST["q8"];
        $question_9 = $_POST["q9"];
        $question_10 = $_POST["q10"];
        $studentId = $_POST["id"];
        $leerlingAntwoorden = [$question_1, $question_2, $question_3, $question_4, $question_5, $question_6, $question_7, $question_8, $question_9, $question_10];

        // Check antwoorden
        foreach($leerlingAntwoorden as $key=>$antwoord) {
            if($antwoord === $juisteAntwoorden[$key]) {
                $score += 10;
            }
        }

        $this->setGame($score, $studentId);

        header("Location: ../../public/pages/gameUitslag.php");
        session_start();
        $_SESSION["score"] = $score;
    }
}
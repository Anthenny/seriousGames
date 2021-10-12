<?php
    require_once '../../private/init.php';
    $paginaTitel = 'Reken Game';
    require_once '../components/authHeader.php';
?>
    
    <div class="game-uitslag__container">
        <div class="game-uitslag__container__header">
            <h3>Reken games</h3>
            <h3>Groep 8</h3>
            <h3><?= $_SESSION["naam"] ?></h3>
        </div>
        <div class="game-uitslag__container__content">
            <h1>Goed gedaan!</h1>
            <h3>Je hebt <?= $_SESSION["score"] ?> van de 100 punten gehaald!</h3>
            <p>Je resultaten worden opgeslagen klik op opnieuw proberen om nog een kans te krijgen!</p>
            <a href="./game.php">Probeer opnieuw</a> 
        </div>
    </div>
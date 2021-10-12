<?php
    require_once '../../private/init.php';
    $paginaTitel = 'Reken Game';
    require_once '../components/authHeader.php';
?>
    
    <div class="game__container">
        <div class="game__container__header">
            <h3>Reken games</h3>
            <h3>Groep 8</h3>
            <h3>Anthenny de Hoon</h3>
        </div>
        <form action="">
            <div class="form__item">
                <div class="question">87 x 4 - 3</div>
                <input type="text" name="q1" placeholder="Vul jouw antwoord in">
            </div>
            <div class="form__item">
                <div class="question">125 x 4 + 6</div>
                <input type="text" name="q2" placeholder="Vul jouw antwoord in">
            </div>
            <div class="form__item">
                <div class="question">42 x 2 - 3</div>
                <input type="text" name="q3" placeholder="Vul jouw antwoord in">
            </div>
            <div class="form__item">
                <div class="question">27 x 1 - 3</div>
                <input type="text" name="q4" placeholder="Vul jouw antwoord in">
            </div>
            <div class="form__item">
                <div class="question">22 x 1 - 3</div>
                <input type="text" name="q5" placeholder="Vul jouw antwoord in">
            </div>
            <div class="form__item">
                <div class="question">97 x 4 - 3</div>
                <input type="text" name="q6" placeholder="Vul jouw antwoord in">
            </div>
            <div class="form__item">
                <div class="question">27 x 4 - 3</div>
                <input type="text" name="q7" placeholder="Vul jouw antwoord in">
            </div>
            <div class="form__item">
                <div class="question">37 x 4 - 3</div>
                <input type="text" name="q8" placeholder="Vul jouw antwoord in">
            </div>
            <div class="form__item">
                <div class="question">27 x 2 - 3</div>
                <input type="text" name="q9" placeholder="Vul jouw antwoord in">
            </div>
            <div class="form__item">
                <div class="question">47 x 1 - 3</div>
                <input type="text" name="q10" placeholder="Vul jouw antwoord in">
            </div>
            <button type="submit" name="submitGame">Submit</button>
        </form>
    </div>
    <script src="../js/quiz.js"></script>
</body>
</html>
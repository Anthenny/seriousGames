<?php
  require_once '../../private/init.php';
  $paginaTitel = 'home';
  require_once '../components/authHeader.php';

?> 

    <div class="home__container">
        <div class="top">
            <div class="home__img">
                <img src="../img//klas.png" alt="">
            </div>
            <div class="home__over-ons card">
                <h1 class="header">Over ons</h1>
                <p class="paragraph">Wij zijn Serious games en wij zijn een school die zich inzet voor de kinderen. Daarom hebben wij het ICT bedrijf van Anthenny de Hoon gevraagd om een goede over ons sectie te schrijven. Uit eerdere projecten van Anthenny de Hoon is gebleken dat hij voor dit soort projecten gemaakt is. </p>
            </div>
        </div>
        <div class="bot">
            <div class="home__nieuws-bericht card">
                <h1 class="header">Nieuws bericht</h1>
                <p class="paragraph">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has 
                </p>
            </div>
            <div class="home__spellen card">
                <h1 class="header">Spellen</h1>
                <p class="paragraph">
                    Bekijk ons aanbod van spellen die 
                    we speciaal voor onze leerlingen 
                    hebben laten ontwerpen.
                </p>
                <a href="./login.php">Klik hier!</a>
            </div>

        </div>
    </div>

<?php
  require_once '../components/authFooter.php';
?>
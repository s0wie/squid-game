<?php
require __DIR__ . "/../components/header.php";
require __DIR__ . "/../components/functions.php";
?>

<h1 class="squid-font content-text"> the six games </h1>
<h3 class="subtext" id="spoiler-alert">!!!SPOILER ALERT!!!</h3>
<article class="container-games">
  </aside>
  <section class="container-game">
    <h2 class="game-title"> 1. Red Light, Green Light</h2>
    <p class="game-description">ELIMINATED: 201
      REMAINING: 187 RETURNED
    </p>
  </section>
  <section class="container-game">
    <h2> 2. Sugar Honey Combs</h2>
    <p>REMAINING: 80
      Prize Money: <?php echo prizeMoney(300); ?> WON
    </p>
  </section>
  <section class="container-game">
    <h2> 3. Tug Of War</h2>
    <p>REMAINING: 40</p>
  </section>
  <section class="container-game">
    <h2> 4. Marbles </h2>
    <p>REMAINING: 17</p>
  </section>
  <section class="container-game">
    <h2> 5. Glass Stepping Stones</h2>
    <p>REMAINING: 3</p>
  </section>
  <section class="container-game">
    <h2> 6. Squid Game</h2>
    <p>REMAINING: 1</p>
  </section>
</article>
<!-- gör ett spel?  TUG OF WARS, där key down så går det ett steg mot höger. 
  gör loggorna till varje spel som finns i stora rummet, och skriv en beskrivning. 
  Funktion: En pott som räknar ut hur många personer och pengar som man kan vinna efter varje spel. 
  Samt valutaomvanlding kanske? Till US-dollar eller till SEK 
ELLER gör ett formulär där man själv kan bli en spelare.  -->
<?php require __DIR__ . "/../components/navigation.php"; ?>
</body>

</html>
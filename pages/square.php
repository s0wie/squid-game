<?php
require __DIR__ . "/../components/header.php";
require __DIR__ . "/../components/functions.php";
?>

<h3 id="spoiler-alert">!!! SPOILER ALERT !!!</h3>
<h3 id="spoiler-alert">!!! SPOILER ALERT !!!</h3>
<h3 id="spoiler-alert">!!! SPOILER ALERT !!!</h3>

<h1 class="squid-font content-text"> The six games </h1>
<p class="subtext">All the games in squid game are based on real kids games.
  Every players' death adds 100 million won to the final prize money.
  In order to win, the players needs to survive all the six games.
  This page briefly summarizes the result of the latest games.
</p>
<article class="container-games">
  <section class="container-game">
    <h2 class="game-title"> 1. Red Light, Green Light</h2>
    <p class="game-description">
      A game where if you are caught moving during 'red light', you are shot. </p>

    <p> <span class="squid-font">ELIMINATED:</span> 201 </p>
    <p> <span class="squid-font">REMAINING:</span> 187 </p>
    <p> <span class="squid-font">Prize pot: </span>
      <?php echo prizeMoney(201) . ", ";
      echo prizeMoneyInSEK(201) ?></p>
  </section>
  <section class="container-game">
    <h2> 2. Sugar Honey Combs</h2>
    <p> A game where you have to pick out the shape in a honey comb.
      If you break the shape, you are shot. </p>
    <p> <span class="squid-font">ELIMINATED:</span> 107 </p>
    <p> <span class="squid-font">REMAINING:</span> 80 </p>
    <p> <span class="squid-font">Prize pot: </span>
      <?php echo prizeMoney(201 + 107) . ", ";
      echo prizeMoneyInSEK(201 + 107) ?></p>
  </section>
  <section class="container-game">
    <h2> 3. Tug Of War</h2>
    <p>A game where you have to form a group of 10 members.
      After forming the group, it is revealed that the game is tug of war,
      where the group who loses falls to their deaths.</p>
    <p> <span class="squid-font">ELIMINATED:</span> 40 </p>
    <p> <span class="squid-font">REMAINING:</span> 40 </p>
    <p> <span class="squid-font">Prize pot: </span>
      <?php echo prizeMoney(201 + 107 + 40) . ", ";
      echo prizeMoneyInSEK(201 + 107 + 40) ?></p>
  </section>
  <section class="container-game">
    <h2> 4. Marbles </h2>
    <p>A game between two players, where the player who wins the other player's 10 marbles survives.
      The players come up with their own rules as to how to win.</p>
    <p> <span class="squid-font">ELIMINATED:</span> 23 </p>
    <p> <span class="squid-font">REMAINING:</span> 17 </p>
    <p> <span class="squid-font">Prize pot: </span>
      <?php echo prizeMoney(201 + 107 + 40 + 23) . ", ";
      echo prizeMoneyInSEK(201 + 107 + 40 + 23) ?></p>
  </section>
  <section class="container-game">
    <h2> 5. Glass Stepping Stones</h2>
    <p>A game where you have to get to the other side of the bridge, by jumping on glass tiles.
      Half of the tiles break which let's the players fall to their death.
    </p>
    <p> <span class="squid-font">ELIMINATED:</span> 14 </p>
    <p> <span class="squid-font">REMAINING:</span> 3 </p>
    <p> <span class="squid-font">Prize pot: </span>
      <?php echo prizeMoney(201 + 107 + 40 + 23 + 14) . ", ";
      echo prizeMoneyInSEK(201 + 107 + 40 + 23 + 14) ?></p>
  </section>
  <section class="container-game">
    <h2> 6. Squid Game</h2>
    <p>A really <a href="https://en.as.com/en/2021/10/11/latest_news/1633966350_194629.html">popular kids' game </a>in Korea in the 70s and 80s.</p>
    <p> <span class="squid-font">ELIMINATED:</span> 2 </p>
    <p> <span class="squid-font">REMAINING:</span> 1 </p>
    <p> <span class="squid-font">Prize pot: </span>
      <?php echo prizeMoney(201 + 107 + 40 + 23 + 14 + 2) . ", ";
      echo prizeMoneyInSEK(201 + 107 + 40 + 23 + 14 + 2) ?></p>
  </section>
</article>
<?php require __DIR__ . "/../components/navigation.php"; ?>
</body>

</html>
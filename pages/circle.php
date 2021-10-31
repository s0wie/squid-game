<?php

declare(strict_types=1);

require __DIR__ . "/../components/header.php";
require __DIR__ . "/../components/slideshow.php";
require __DIR__ . "/../components/functions.php";
?>


<article class="circle-article">
  <section class="circle-section">
    <h1>
      Welcome to the Squid Game fan page.
    </h1>
    <p>
      It has been <span id="days">
        <?php

        $releaseDate = "2021-09-17";
        $todaysDate = date('y-m-d');
        echo daysSinceRelease($releaseDate, $todaysDate);

        ?></span> days since Squid Game was released worldwide, on September 17 2021.
      Since then, the Netflix series has gained international attention.
      Attracting more than 142 million households during its first four weeks from launch,
      it is Netflix’s most-watched series to date. It was created by, written by and directed by one single
      person: Hwang Dong-Hyuk.
    </p>
    On this website, you can read more about the series.
    Navigate through different pages by clicking on the geometrical icons at the bottom of this page.
    <p>
  </section>
  <section class="circle-section">
    <h1>Plot</h1>
    <p>Seong Gi-hun, a divorced and indebted chauffeur, is invited to play a series of children's games
      for a chance at a large cash prize. Accepting the offer, he is taken to an unknown location where
      he finds himself among 456 players who are all deeply in debt. The players are made to wear green
       tracksuits and are kept under watch at all times by masked guards in pink jumpsuits, with the
      games overseen by the Front Man, who wears a black mask and black uniform. The players soon
      discover that losing a game results in their death, with each death adding ₩100 million to the
      potential ₩45.6 billion grand prize. Gi-hun allies with other players, including his childhood
      friend Cho Sang-woo, to try to survive the physical and psychological twists of the games.</p>
    </p>
  </section>
</article>

<div>
  <!-- Lägg till grid, information, länkar till artiklar -->
</div>

<?php
require __DIR__ . "/../components/navigation.php";
?>

<script src="/../scripts/slideshow.js"></script>

</body>

</html>
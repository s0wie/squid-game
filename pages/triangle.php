<?php

declare(strict_types=1);
require __DIR__ . "/../components/header.php";
require __DIR__ . "/../components/data.php";
?>

<div>
  <p class="content-text">CHARACTERS AND CASTS</p>
</div>
<div class="actor-container">
  <?php
  foreach ($characters as $character) {
    $characterImage = $character['actor-img'];
    $characterName = $character['name'];
    $actor = $character['actor'];
    $characterInfo = $character['character-info'];
    $playerTag = $character['player-tag'];
    $traits = $character['traits'];
  ?>
    <div class="actor-item">
      <img class="actor-img" src="<?php echo $characterImage ?>" alt="<?php echo $characterName ?>">
      <div class="actor-description">
        <p class="squid-font">
          <?php if ($playerTag !== NULL) {
            echo "Player " . $playerTag;
          } ?></p>
        <p><b><?php echo $characterName ?></b> played by <em><?php echo $actor ?></em></p>
        <p><?php echo $characterInfo ?></p>
        <p class="squid-font">Traits</p>
        <p>
          <?php foreach ($traits as $trait) {
            echo $trait; ?> <br>
          <?php
          } ?>
        </p>
      </div>
    </div>

  <?php } ?>
</div>
<?php require __DIR__ . "/../components/navigation.php"; ?>
</body>

</html>
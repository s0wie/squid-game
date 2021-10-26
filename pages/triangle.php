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
  ?>
    <div class="actor-item">
      <img class="actor-img" src="<?php echo $characterImage ?>" alt="<?php echo $characterName ?>">
      <div class="actor-description">
        <p><b><?php echo $characterName ?></b> played by <em><?php echo $actor ?></em></p>
        <p><?php echo $characterInfo ?></p>
      </div>
    </div>

  <?php } ?>
</div>
</body>

</html>
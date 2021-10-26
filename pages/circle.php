<?php

declare(strict_types=1);

require __DIR__ . "/../components/header.php"; ?>

<div class="slideshow-container">
  <?php

  require __DIR__ . "/../components/data.php";

  foreach ($slideshowImages as $slideshowImage) :
    $img = $slideshowImage['img'];
    $imgText = $slideshowImage['text'];
  ?>

    <div class="mySlides fade">
      <img src="<?php echo $img ?>" style="width:100%">
      <div class="text"><?php echo $imgText ?></div>
    </div>

  <?php endforeach ?>


</div>
<article>
  <h1 class="content-text">HELLO</h1>
  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid nulla optio nisi, quos assumenda rerum temporibus tenetur deleniti autem fugit soluta corporis animi id eligendi atque non sint veritatis itaque!</p>
</article>

<div>
  <!-- Lägg till grid, information, länkar till artiklar -->
</div>

<script src="/../scripts/slideshow.js"></script>
</body>

</html>
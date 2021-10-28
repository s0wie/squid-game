<div class="slideshow-container">
  <?php

  require __DIR__ . "/../components/data.php";

  foreach ($slideshowImages as $slideshowImage) :
    $img = $slideshowImage['img'];
    $imgText = $slideshowImage['text'];
  ?>

    <div class="my-slides fade">
      <img src="<?php echo $img ?>" style="width:100%">
      <div class="text"><?php echo $imgText ?></div>
    </div>

  <?php endforeach ?>


</div>
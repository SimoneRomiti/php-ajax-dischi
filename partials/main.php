<main>
  <?php
  foreach ($database as $key => $value) {
  ?>

    <div class="album">
      <img src="<?php echo $value["poster"] ?> " alt="">

      <div class="title">
        <?php echo $value["title"]; ?>
      </div>

      <div class="author">
        <?php echo $value["author"]; ?>
      </div>

      <div class="year">
        <?php echo $value["year"]; ?>
      </div>
    </div>

  <?php } ?>

</main>
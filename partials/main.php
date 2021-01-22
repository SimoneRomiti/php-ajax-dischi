<main>
  <?php
  foreach ($database as $key => $value) {
  ?>

    <div class="album">
      <img src="<?php echo $value["poster"] ?> " alt="">

      <div class="title">
        <h3><?php echo $value["title"]; ?></h3>
      </div>

      <div class="genre">
        <i><?php echo $value["genre"]; ?></i>
      </div>

      <div class="author-year">

        <div class="author">
          <?php echo $value["author"]; ?>
        </div>

        <div class="year">
          <?php echo $value["year"]; ?>
        </div>
        
      </div>


    </div>

  <?php } ?>

</main>
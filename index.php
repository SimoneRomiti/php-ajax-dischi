<?php include "db.php"; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <link rel="stylesheet" href="css/style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>

<body>

  <!-- header -->
  <?php include "template/header.php"; ?>
  <!-- /header -->

  <div class="selection">
    <label for="">SELEZIONA GENERE</label>
    <select name="" id="">
      <option value="">ALL</option>
      <option value="">Pop</option>
      <option value="">Jazz</option>
      <option value="">Metal</option>
      <option value="">Rock</option>
    </select>
  </div>


  <!-- main -->
  <?php include "template/main.php"; ?>
  <!-- /main -->

  <!-- footer -->
  <?php include "template/footer.php"; ?>
  <!-- /footer -->


</body>

</html>